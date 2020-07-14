<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formation;
use App\Categorie;
use App\SousCategorie;
use App\Contact;
use App\Page;
use App\Http\Requests\ContactRequest;
use Mail;
use DB;

class SiteController extends Controller
{
    public function formation($id){
        $formation = Formation::where('id','=',$id)->firstOrFail();
        if(! isset($formation->sessions) || $formation->sessions==""){
            $default = Formation::where('nom','=','default')->firstOrFail();
            $formation->session=$default->session;
        }
        $categories = Categorie::distinct('nom')->orderBy('nom', 'ASC')->get();
        return view ('formation',compact('categories','formation'));
    }

    public function formationBySlug($slug){
        $formation = Formation::where('slug','=',$slug)->firstOrFail();
        if(! isset($formation->sessions) || $formation->sessions==""){
            $default = Formation::where('nom','=','default')->firstOrFail();
            $formation->session=$default->session;
        }
        $categories = Categorie::distinct('nom')->orderBy('nom', 'ASC')->get();
        return view ('formation',compact('categories','formation'));
    }

    public function categorie($slug){
        $categorie = Categorie::where('slug',$slug)->first();
        $categories = Categorie::distinct('nom')->orderBy('nom', 'ASC')->get();
        $formations = $categorie->formations()->get();
        return view ('categorie',compact('categories','categorie','formations'));
    }

    public function sous_categorie($slug){
        $sous_categorie = SousCategorie::where('slug',$slug)->first();
        $categories = Categorie::distinct('nom')->orderBy('nom', 'ASC')->get();
        $formations = $sous_categorie->formations()->get();
        return view ('sous_categorie',compact('categories','sous_categorie','formations'));
    }

    public function contact($id="",$session=false){
        $categories = Categorie::distinct('nom')->orderBy('nom', 'ASC')->get();
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
        return view('contact', compact('categories','formation','session'));
    }

    public function contactPost(Request $request){
        
        $this->validate(
            $request, 
            [
                'nom' => 'required',
                'email' => 'required|email',
                'telephone' => 'required|regex:/(0)[0-9]{9}/',
                'g-recaptcha-response' => 'required|captcha',
                'message' => 'required'
            ],
            [
                'required'=>"Le champ :attribute est requis",
                'g-recaptcha-response.required'=>"Merci de cocher le captcha"
            ]
        );
        $date_choisie=false;
        if($request->get('formation_id') ?? false){
            $formation = Formation::where('id','=',$request->get('formation_id'))->firstOrFail();
            if($formation->sessions ?? false)
                $date_choisie = explode(',',$formation->sessions)[$request->get('session')];
            else{
                $formation=Formation::where('nom','=','default')->firstOrFail();
                $date_choisie = explode(',',$formation->sessions)[$request->get('session')];
            }
        }
        Contact::create($request->all());
        Mail::send('email',
            array(
                'nom' => $request->get('nom'),
                'email' => $request->get('email'),
                'telephone' => $request->get('telephone'),
                'formation_message' => $request->get('message'),
                'formation'=> $request->get('formation_id'),
                'date_choisie'=> $date_choisie?$date_choisie:false,
            ), function($message)
            {
                $message->from('vmogenet@cyn-communication.fr');
                //$message->to('vmogenet@cyn-communication.fr', 'Admin')->subject('Contact Cyn-formation');
                $message->to('verdier.developpement@gmail.com', 'Admin')->subject('Contact Cyn-formation');
            }
        );
        $categories = Categorie::distinct('nom')->get();

        return view('contact', compact('categories'))->with('success', 'Merci pour votre message !</br> Nous vous recontacterons sous peu');
        //return back()->with('success', 'Merci pour votre message ! Nous vous recontacterons sous peu');
    }

    public function mentions_legales(){
        $page=Page::where('slug','mentions-legales')->firstOrFail();
        $categories = Categorie::distinct('nom')->get();
        return view('page', compact('page','categories'));
    }

    public function infos_pratiques(){
        $page=Page::where('slug','infos-pratiques')->firstOrFail();
        $categories = Categorie::distinct('nom')->get();
        return view('page', compact('page','categories'));
    }

    public function cgv(){
        $page=Page::where('slug','cgv')->firstOrFail();
        $categories = Categorie::distinct('nom')->get();
        return view('page', compact('page','categories'));
    }

    public function demarche_qualite(){
        $page=Page::where('slug','demarche-qualite')->firstOrFail();
        $categories = Categorie::distinct('nom')->get();
        return view('page', compact('page','categories'));
    }

    public function contactRecrutement($id="",$session=false){
        $categories = Categorie::distinct('nom')->orderBy('nom', 'ASC')->get();
        return view('contact_recrutement', compact('categories'));
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
                $message->from('vmogenet@cyn-communication.fr');
                //$message->to('vmogenet@cyn-communication.fr', 'Admin')->subject('Contact Cyn-formation');
                $message->to('verdier.developpement@gmail.com', 'Admin')->subject('Contact Cyn-formation');
            }
        );
        $categories = Categorie::distinct('nom')->get();

        return view('contact_recrutement', compact('categories'))->with('success', 'Merci pour votre message !</br> Nous vous recontacterons sous peu');
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
        $categories = Categorie::distinct('nom')->orderBy('nom', 'ASC')->get();
        return view ('recherche',compact('categories','categorie','formations','search'));
    }
}
