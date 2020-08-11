<?php

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
use App\Http\Requests\ContactRequest;
use Mail;
use DB;

/**
 * Controller principal des pages
 * 
 * @author Manoah Verdier
 * @package Controllers
 * @category SiteController
 * @license 
 */
class SiteController extends Controller
{
    /**
     * Pages formations accédées par l'id
     *
     * @param int $id l'id de la formation
     * 
     * @return void
     */
    public function formation($id)
    {

        $formation = Formation::where('id', $id)->firstOrFail();
        $formations_header = Formation::distinct('nom')
            ->whereNotNull('categorie_id')
            ->where("nom", "!=", "default")
            ->orderBy('nom', 'ASC')
            ->get();
        $conseils_header = Conseil::distinct('certification')
            ->orderBy('certification', 'ASC')
            ->get();
        if (! isset($formation->sessions) || $formation->sessions=="") {
            $default = Formation::where('nom', '=', 'default')->first();
            $formation->session=$default->session;
            return view(
                'formation', 
                compact(
                    'conseils_header', 
                    'formations_header', 
                    'formation', 
                    'default'
                )
            );
        }
        
        return view(
            'formation',
            compact(
                'conseils_header',
                'formations_header',
                'formation'
            )
        );
    }

    /**
     * Pages formations accédées par le slug
     *
     * @param string $slug le slug de la formation
     * 
     * @return void
     */
    public function formationBySlug($slug)
    {
        $formation = Formation::where('slug', '=', $slug)->firstOrFail();

        $formations_header = Formation::distinct('nom')
            ->whereNotNull('categorie_id')
            ->where("nom", "!=", "default")
            ->orderBy('nom', 'ASC')
            ->get();
        $conseils_header = Conseil::distinct('certification')
            ->orderBy('certification', 'ASC')
            ->get();

        if (! isset($formation->sessions) || $formation->sessions=="") {
            $default = Formation::where('nom', '=', 'default')->firstOrFail();
            $formation->session=$default->session;
            return view(
                'formation',
                compact(
                    'conseils_header',
                    'formations_header',
                    'formation',
                    'default'
                )
            );
        }
        
        return view(
            'formation',
            compact(
                'conseils_header',
                'formations_header',
                'formation'
            )
        );
    }

    /**
     * Page conseil accédée par le slug
     *
     * @param string $slug le slug de la page conseil
     * 
     * @return void
     */
    public function conseilBySlug($slug)
    {
        $conseil = Conseil::where('slug', '=', $slug)->firstOrFail();

        $formations_header = Formation::distinct('nom')
            ->whereNotNull('categorie_id')
            ->where("nom", "!=", "default")
            ->orderBy('nom', 'ASC')
            ->get();
        $conseils_header = Conseil::distinct('certification')
            ->orderBy('certification', 'ASC')
            ->get();

        return view(
            'conseil',
            compact(
                'conseils_header',
                'formations_header',
                'conseil'
            )
        );
    }

    public function categorie($slug){
        $categorie = Categorie::where('slug',$slug)->first();
        
        $formations_header = Formation::distinct('nom')->whereNotNull('categorie_id')->where("nom","!=","default")->orderBy('nom', 'ASC')->get();
        $conseils_header = Conseil::distinct('certification')->orderBy('certification', 'ASC')->get();

        $formations = $categorie->formations()->get();
        return view ('categorie',compact('conseils_header','formations_header','categorie','formations'));
    }

    public function sous_categorie($slug){
        $sous_categorie = SousCategorie::where('slug',$slug)->first();
        $formations_header = Formation::distinct('nom')->whereNotNull('categorie_id')->where("nom","!=","default")->orderBy('nom', 'ASC')->get();
        $conseils_header = Conseil::distinct('certification')->orderBy('certification', 'ASC')->get();
        $formations = $sous_categorie->formations()->get();
        return view ('sous_categorie',compact('conseils_header','formations_header','sous_categorie','formations'));
    }

    public function contact($id="",$session=false){
        $formations_header = Formation::distinct('nom')->whereNotNull('categorie_id')->where("nom","!=","default")->orderBy('nom', 'ASC')->get();
        $conseils_header = Conseil::distinct('certification')->orderBy('certification', 'ASC')->get();
        $formation=null;
        if($id!=""){
            $formation = Formation::where('id','=',$id)->firstOrFail();
            //dd($formation);
            if(! isset($formation->sessions) || $formation->sessions==""){
                $default = Formation::where('nom','=','default')->firstOrFail();
                //dd($default);
                $formation->sessions=$default->sessions;
            }
        }
        return view('contact', compact('conseils_header','formations_header','formation','session'));
    }

    public function contactPost(Request $request){
        
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
        if($request->get('formation_id') ?? false){
            $formation = Formation::where('id','=',$request->get('formation_id'))->firstOrFail();
            $slug = $formation->slug;
            
            if($request->get('session') != null ){
                if($formation->sessions ?? false)
                    $date_choisie = explode(',',$formation->sessions)[$request->get('session')];
                else{
                    $formation=Formation::where('nom','=','default')->firstOrFail();
                    $date_choisie = explode(',',$formation->sessions)[$request->get('session')];
                }
            }
        }
        Contact::create($request->all());
        Mail::send('email',
            array(
                'nom' => $request->get('nom'),
                'email' => $request->get('email'),
                'telephone' => $request->get('telephone'),
                'formation_message' => $request->get('message'),
                'formation'=> $slug?$slug:"",
                'date_choisie'=> $date_choisie?$date_choisie:false,
            ), function($message)
            {
                $message->from('contact@cyn-communication.fr');
                $message->to('vmogenet@cyn-communication.fr', 'Admin')->subject('Contact Cyn-formation');
                $message->to('verdier.developpement@gmail.com', 'Admin')->subject('Contact Cyn-formation');
            }
        );
        $formations_header = Formation::distinct('nom')->whereNotNull('categorie_id')->where("nom","!=","default")->orderBy('nom', 'ASC')->get();
        $conseils_header = Conseil::distinct('certification')->orderBy('certification', 'ASC')->get();
        
        return view('contact', compact('conseils_header','formations_header'))->with('success', 'Merci pour votre message !</br> Nous vous recontacterons sous peu');
        //return back()->with('success', 'Merci pour votre message ! Nous vous recontacterons sous peu');
    }

    public function mentions_legales(){
        $page=Page::where('slug','mentions-legales')->firstOrFail();
        $formations_header = Formation::distinct('nom')->whereNotNull('categorie_id')->where("nom","!=","default")->orderBy('nom', 'ASC')->get();
        $conseils_header = Conseil::distinct('certification')->orderBy('certification', 'ASC')->get();
        return view('page', compact('page','conseils_header','formations_header'));
    }

    public function infos_pratiques(){
        $page=Page::where('slug','infos-pratiques')->firstOrFail();
        $formations_header = Formation::distinct('nom')->whereNotNull('categorie_id')->where("nom","!=","default")->orderBy('nom', 'ASC')->get();
        $conseils_header = Conseil::distinct('certification')->orderBy('certification', 'ASC')->get();
        return view('page', compact('page','conseils_header','formations_header'));
    }

    public function cgv(){
        $page=Page::where('slug','cgv')->firstOrFail();
        $formations_header = Formation::distinct('nom')->whereNotNull('categorie_id')->where("nom","!=","default")->orderBy('nom', 'ASC')->get();
        $conseils_header = Conseil::distinct('certification')->orderBy('certification', 'ASC')->get();
        return view('page', compact('page','conseils_header','formations_header'));
    }

    public function demarche_qualite(){
        $page=Page::where('slug','demarche-qualite')->firstOrFail();
        $formations_header = Formation::distinct('nom')->whereNotNull('categorie_id')->where("nom","!=","default")->orderBy('nom', 'ASC')->get();
        $conseils_header = Conseil::distinct('certification')->orderBy('certification', 'ASC')->get();
        return view('page', compact('page','conseils_header','formations_header'));
    }

    public function faqs(){
        $faqs = FaqCategory::all();
        $formations_header = Formation::distinct('nom')->whereNotNull('categorie_id')->where("nom","!=","default")->orderBy('nom', 'ASC')->get();
        $conseils_header = Conseil::distinct('certification')->orderBy('certification', 'ASC')->get();
        return view('faqs', compact('faqs','conseils_header','formations_header'));
    }

    public function faq_categories($categ_slug){
        $faq_categ = FaqCategory::where('slug',$categ_slug)->firstOrFail();
        $formations_header = Formation::distinct('nom')->whereNotNull('categorie_id')->where("nom","!=","default")->orderBy('nom', 'ASC')->get();
        $conseils_header = Conseil::distinct('certification')->orderBy('certification', 'ASC')->get();
        return view('faq_category', compact('faq_categ','conseils_header','formations_header'));
    }

    public function faq($slug){
        $faq = Faq::where('slug',$slug)->firstOrFail();
        $formations_header = Formation::distinct('nom')->whereNotNull('categorie_id')->where("nom","!=","default")->orderBy('nom', 'ASC')->get();
        $conseils_header = Conseil::distinct('certification')->orderBy('certification', 'ASC')->get();
        return view('faq', compact('faq','conseils_header','formations_header'));
    }

    public function contactRecrutement($id="",$session=false){
        $formations_header = Formation::distinct('nom')->whereNotNull('categorie_id')->where("nom","!=","default")->orderBy('nom', 'ASC')->get();
        $conseils_header = Conseil::distinct('certification')->orderBy('certification', 'ASC')->get();
        return view('contact_recrutement', compact('conseils_header','formations_header'));
    }

    public function contactRecrutementPost(Request $request){
        
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
        Mail::send('email',
            array(
                'nom' => $request->get('nom'),
                'email' => $request->get('email'),
                'telephone' => $request->get('telephone'),
                'formation_message' => $request->get('message'),
                'file'=>$filePath
            ), function($message)
            {
                $message->from('contact@cyn-communication.fr');
                $message->to('vmogenet@cyn-communication.fr', 'Admin')->subject('Contact Cyn-formation');
                //$message->to('verdier.developpement@gmail.com', 'Admin')->subject('Contact Cyn-formation');
            }
        );
        $formations_header = Formation::distinct('nom')->whereNotNull('categorie_id')->where("nom","!=","default")->orderBy('nom', 'ASC')->get();
        $conseils_header = Conseil::distinct('certification')->orderBy('certification', 'ASC')->get();
        
        return view('contact_recrutement', compact('conseils_header','formations_header'))->with('success', 'Merci pour votre message !</br> Nous vous recontacterons sous peu');
        //return back()->with('success', 'Merci pour votre message ! Nous vous recontacterons sous peu');
    }

    protected function upload($file)
    {
        if (!is_null($file) && isset($file) && $file->isValid()) {
            $fileName = (new \DateTime())->format('d.m.Y-hsi').'.'.$file->guessExtension();
            $file->move(storage_path() . '/app/public/uploads', $fileName);
            return '/storage/uploads/' . $fileName;
        } else {
            return view('contact_recrutement')
                ->with('message', 'Fichier invalide !');
        }        
    }

    public function recherche(Request $request){
        $formations = Formation::where('titre','LIKE','%'.$request->get('search').'%')
                                ->orWhere('contenu','LIKE','%'.$request->get('search').'%')
                                ->orWhere('objectif','LIKE','%'.$request->get('search').'%')
                                ->orWhere('infos_pratiques','LIKE','%'.$request->get('search').'%')->get();
        $categorie = Categorie::where('slug',"qualite")->first();
        $search = $request->get('search');
        $formations_header = Formation::distinct('nom')->whereNotNull('categorie_id')->where("nom","!=","default")->orderBy('nom', 'ASC')->get();
        $conseils_header = Conseil::distinct('certification')->orderBy('certification', 'ASC')->get();
        return view ('recherche',compact('categorie','formations','search','conseils_header','formations_header'));
    }
}
