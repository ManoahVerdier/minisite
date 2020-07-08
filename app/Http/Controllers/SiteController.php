<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formation;
use App\Categorie;
use App\SousCategorie;
use App\Contact;
use Mail;

class SiteController extends Controller
{
    public function formation($id){
        $formation = Formation::where('id','=',$id)->firstOrFail();
        $categories = Categorie::distinct('nom')->get();
        return view ('formation',compact('categories','formation'));
    }

    public function categorie($slug){
        $categorie = Categorie::where('slug',$slug)->first();
        $categories = Categorie::distinct('nom')->get();
        $formations = $categorie->formations()->get();
        return view ('categorie',compact('categories','categorie','formations'));
    }

    public function sous_categorie($slug){
        $sous_categorie = SousCategorie::where('slug',$slug)->first();
        $categories = Categorie::distinct('nom')->get();
        $formations = $sous_categorie->formations()->get();
        return view ('sous_categorie',compact('categories','sous_categorie','formations'));
    }

    public function contact(){
        $categories = Categorie::distinct('nom')->get();
        return view('contact', compact('categories'));
    }

    public function contactPost(Request $request){
        $this->validate($request, [
            'nom' => 'required',
            'email' => 'required|email',
            'telephone' => 'required|regex:/(0)[0-9]{9}/',
            'message' => 'required'
            ]);
        Contact::create($request->all());
        Mail::send('email',
            array(
                'nom' => $request->get('nom'),
                'email' => $request->get('email'),
                'telephone' => $request->get('telephone'),
                'formation_message' => $request->get('message')
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
