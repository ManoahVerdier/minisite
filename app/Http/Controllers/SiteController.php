<?php

/**
 * SiteController.php
 * 
 * PHP version 7.3
 * 
 * @category SiteController
 * @package  Controllers
 * @author   Manoah Verdier <verdier.developpement@gmail.com>
 * @license  http://certificationiso.fr/mentions-legales Custom Licence
 * @link     http://certificationiso.fr
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formation;
use App\Categorie;
use App\SousCategorie;
use App\Contact;
use App\Page;
use App\Faq;
use App\FaqCategory;
use App\Conseil;
use App\Homepage;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use DB;

/**
 * Classe Controller principal des pages
 *
 * @category SiteController
 * @package  Controllers
 * @author   Manoah Verdier <verdier.developpement@gmail.com>
 * @license  http://certificationiso.fr/mentions-legales Custom Licence
 * @link     http://certificationiso.fr
 */
class SiteController extends Controller
{
    /**
     * Gestion de la page d'accueil
     *
     * @return void
     */
    public function homepage()
    {
        $hp = Homepage::first();
        return view('home', compact('hp'));
    }

    /**
     * Pages formations accédées par l'id
     *
     * @param Formation $formation la formation concernée
     * 
     * @return void
     */
    public function formation(Formation $formation)
    {   
        if (! isset($formation->sessions)) {
            $formation->sessions=Formation::
                where('nom', '=', 'default')
                ->firstOrFail()
                ->sessions;
        }
        return view(
            'formation',
            compact(
                'formation'
            )
        );
    }

    /**
     * Pages formations accédées par le slug
     *
     * @param Formation $formation la formation a afficher
     * 
     * @return void
     */
    public function formationBySlug(Formation $formation)
    {
        if (! isset($formation->sessions)) {
            $formation->sessions=Formation::
                where('nom', '=', 'default')
                ->firstOrFail()
                ->sessions;
        }
        return view(
            'formation',
            compact(
                'formation'
            )
        );
    }

    /**
     * Page conseil accédée par le slug
     *
     * @param Conseil $conseil le conseil
     * 
     * @return void
     */
    public function conseilBySlug(Conseil $conseil)
    {
        return view(
            'conseil',
            compact(
                'conseil'
            )
        );
    }

    /**
     * Page catégorie
     * 
     * @param string $slug le slug de la categorie
     * 
     * @return void
     */
    public function categorie($slug)
    {
        $categorie = Categorie::where('slug', $slug)->first();
        $formations = $categorie->formations()->get();

        return view(
            'categorie', 
            compact(
                'categorie', 
                'formations'
            )
        );
    }

    /**
     * Page sous-catégorie
     * 
     * @param string $slug le slug de la sous-categorie
     * 
     * @return void
     */
    public function sousCategorie($slug)
    {
        $sous_categorie = SousCategorie::where('slug', $slug)->first();
        $formations = $sous_categorie->formations()->get();

        return view(
            'sous_categorie',
            compact(
                'sous_categorie',
                'formations'
            )
        );
    }

    /**
     * Page contact
     * 
     * @param int   $id      l'id de formation concerné
     * @param mixed $session la session choisie
     * 
     * @return void
     */
    public function contact($id="",$session=false)
    {
        $formation=null;
        if ($id!="") {
            $formation = Formation::where('id', '=', $id)->firstOrFail();
            if (! isset($formation->sessions) || $formation->sessions=="") {
                $default = Formation::where('nom', '=', 'default')->firstOrFail();
                $formation->sessions=$default->sessions;
            }
        }
        return view(
            'contact', 
            compact(
                'formation',
                'session'
            )
        );
    }

    /**
     * Recoit le formulaire de contact POST
     *
     * @param Request $request le formulaire
     * 
     * @return void
     */
    public function contactPost(Request $request)
    {
        $this->validate(
            $request, 
            [
                'nom' => 'required',
                'email' => 'required|email',
                'telephone' => 'required|regex:/(0)[0-9]{9}/',
                'g-recaptcha-response' => 'required|captcha'
            ],
            [
                'required'=>"Le champ :attribute est requis",
                'g-recaptcha-response.required'=>"Merci de cocher le captcha"
            ]
        );
        $slug="";
        $date_choisie=false;

        if ($request->get('formation_id') ?? false) {
            $formation = Formation::where('id', '=', $request->get('formation_id'))
                ->firstOrFail();
            $slug = $formation->slug;
            
            if ($request->get('session') != null ) {
                if ($formation->sessions ?? false) {
                    $date_choisie = explode(
                        ',', 
                        $formation->sessions
                    )[$request->get('session')];
                } else {
                    $formation = Formation::where('nom', '=', 'default')
                        ->firstOrFail();
                    $date_choisie = explode(
                        ',', 
                        $formation->sessions
                    )[$request->get('session')];
                }
            }
        }

        Contact::create($request->all());
        Mail::send(
            'email',
            array(
                'nom' => $request->get('nom'),
                'email' => $request->get('email'),
                'telephone' => $request->get('telephone'),
                'formation_message' => $request->get('message'),
                'formation'=> $slug?$slug:"",
                'date_choisie'=> $date_choisie?$date_choisie:false,
            ), function ($message) {
                $message->from('contact@cyn-communication.fr');
                $message
                    ->to('vmogenet@cyn-communication.fr', 'Admin')
                    ->subject('Contact '.env("APP_NAME"));
            }
        );
        
        return view('contact')
            ->with(
                'success', 
                'Merci pour votre message !</br> Nous vous recontacterons sous peu'
            );
    }

    /**
     * Page mentions légales
     *
     * @return void
     */
    public function mentionsLegales()
    {
        $page=Page::where('slug', 'mentions-legales')->firstOrFail();
        return view('page', compact('page'));
    }

    /**
     * Page infos pratiques
     *
     * @return void
     */
    public function infosPratiques()
    {
        $page=Page::where('slug', 'infos-pratiques')->firstOrFail();
        return view('page', compact('page'));
    }

    /**
     * Page cgv
     *
     * @return void
     */
    public function cgv()
    {
        $page=Page::where('slug', 'cgv')->firstOrFail();
        return view('page', compact('page'));
    }

    /**
     * Page demarche qualite
     *
     * @return void
     */
    public function demarcheQualite()
    {
        $page=Page::where('slug', 'demarche-qualite')->firstOrFail();
        return view('page', compact('page'));
    }

    /**
     * Page à propos de nous
     *
     * @return void
     */
    public function aPropos()
    {
        $page=Page::where('slug', 'a-propos-nous')->firstOrFail();
        return view('page', compact('page'));
    }

    /**
     * Page nos clients
     *
     * @return void
     */
    public function clients()
    {
        $page=Page::where('slug', 'nos-clients')->firstOrFail();
        return view('page', compact('page'));
    }

    /**
     * Page nos partenaires
     *
     * @return void
     */
    public function partenaires()
    {
        $page=Page::where('slug', 'nos-partenaires')->firstOrFail();
        return view('page', compact('page'));
    }

    /**
     * Page Audit interne qualite externe
     *
     * @return void
     */
    public function auditInterne()
    {
        return view('audit');
    }

    /**
     * Page index des catégories de faq
     *
     * @return void
     */
    public function faqs()
    {
        $faqs = FaqCategory::all();
        return view('faqs', compact('faqs'));
    }

    /**
     * Page index des pages
     *
     * @return void
     */
    public function pages()
    {
        $pages = Page::whereNotIn(
            "slug", 
            ['cgv', 'nos-partenaires', 'a-propos-nous', 'demarche-quelite', 'nos-clients' ]
        )->get();
        return view('pages', compact('pages'));
    }

    /**
     * Page index des faqs d'une catégorie
     *
     * @param string $categSlug le slug de la catégorie
     * 
     * @return void
     */
    public function categorieFaq($categSlug)
    {
        $faq_categ = FaqCategory::where('slug', $categSlug)->firstOrFail();
        return view('faq_category', compact('faq_categ'));
    }

    /**
     * Page d'une faq
     *
     * @param string $slug le slug de la question
     * 
     * @return void
     */
    public function faq($slug)
    {
        $faq = Faq::where('slug', $slug)->firstOrFail();
        $taglessTitle = html_entity_decode(strip_tags($faq->question), ENT_QUOTES, 'UTF-8');
        return view('faq', compact('faq', 'taglessTitle'));
    }

    /**
     * Page spécifique
     *
     * @param string $slug le slug de la page
     * 
     * @return void
     */
    public function page($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('page', compact('page'));
    }

    /**
     * Page contact pour recrutement
     *
     * @return void
     */
    public function contactRecrutement()
    {
        return view('contact_recrutement');
    }

    /**
     * Traitement du formulaire de recrutement POST 
     * 
     * @param Request $request le formulaire posté
     * 
     * @return void
     */
    public function contactRecrutementPost(Request $request)
    {    
        $this->validate(
            $request, 
            [
                'nom' => 'required',
                'email' => 'required|email',
                'telephone' => 'required|regex:/(0)[0-9]{9}/',
                'g-recaptcha-response' => 'required|captcha',
                'message' => 'required',
                'file'=>'file'
            ],
            [
                'required'=>"Le champ :attribute est requis",
                'g-recaptcha-response.required'=>"Merci de cocher le captcha"
            ]
        );

        $filePath = $this->upload($request->file('file'));
        Contact::create($request->all());

        Mail::send(
            'email',
            array(
                'nom' => $request->get('nom'),
                'email' => $request->get('email'),
                'telephone' => $request->get('telephone'),
                'formation_message' => $request->get('message'),
                'file'=>$filePath
            ), function ($message) {
                $message->from('contact@cyn-communication.fr');
                $message
                    ->to('vmogenet@cyn-communication.fr', 'Admin')
                    ->subject('Contact '.env('APP_NAME'));
            }
        );
        return view('contact_recrutement')
            ->with(
                'success', 
                'Merci pour votre message !</br> Nous vous recontacterons sous peu'
            );
    }

    /**
     * Stocke un fichier soumis dans un formulaire
     *
     * @param file $file le fichier traité
     * 
     * @return void
     */
    protected function upload($file)
    {
        if (!is_null($file) && isset($file) && $file->isValid()) {
            $fileName = (new \DateTime())
                ->format('d.m.Y-hsi').'.'.$file->guessExtension();
            $file->move(storage_path() . '/app/public/uploads', $fileName);
            return '/storage/uploads/' . $fileName;
        } else {
            return view('contact_recrutement')
                ->with('message', 'Fichier invalide !');
        }        
    }

    /**
     * Page recherche
     * 
     * @return void
     */
    public function rechercheGet()
    {
        return view('recherche');
    }

    /**
     * Traitement du formulaire de recherche et affichage des résultats
     * 
     * @param Request $request les données postées
     * 
     * @return void
     */
    public function recherche(Request $request)
    {
        $formations = Formation::
            where(
                'titre', 
                'LIKE', 
                '%'.$request->get('search').'%'
            )
            ->orWhere(
                'contenu', 
                'LIKE', 
                '%'.$request->get('search').'%'
            )
            ->orWhere(
                'objectif', 
                'LIKE', 
                '%'.$request->get('search').'%'
            )
            ->orWhere(
                'infos_pratiques',
                'LIKE',
                '%'.$request->get('search').'%'
            )
            ->get();

        $categorie = Categorie::where('slug', "qualite")->first();
        $search = $request->get('search');
        return view('recherche', compact('categorie', 'formations', 'search'));
    }
}
