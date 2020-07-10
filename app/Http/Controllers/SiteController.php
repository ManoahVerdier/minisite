<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formation;
use App\Categorie;
use App\SousCategorie;
use App\Contact;
use App\Http\Requests\ContactRequest;
use Mail;

class SiteController extends Controller
{
    public function formation($id){
        $formation = Formation::where('id','=',$id)->firstOrFail();
        $formation = Formation::where('id','=',$id)->firstOrFail();
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
                'formation'=> $request->get('formation_nom'),
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
}
