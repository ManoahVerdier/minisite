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
use App\PageProduit;
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
        $produits = PageProduit::all()->take(3);
        return view('home', compact('hp','produits'));
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
     * Page index des catégories de faq
     *
     * @return void
     */
    public function faqs()
    {
        $faqs = Faq::all();
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
            [
                'cgv', 
                'nos-partenaires', 
                'a-propos-nous', 
                'demarche-qualite', 
                'nos-clients',
                'mentions-legales',
                'audit-interne-qualite-externalise'
            ]
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
        //return view('page', compact('page'));
    }

    /**
     * Page produit spécifique
     *
     * @param string $slug le slug de la page
     * 
     * @return void
     */
    public function page_produit($slug)
    {
        $page = PageProduit::where('slug', $slug)->firstOrFail();
        return view('page_produit', compact('page'));
        //return view('page', compact('page'));
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
        $pages = PageProduit::
            where(
                'title', 
                'LIKE', 
                '%'.$request->get('search').'%'
            )
            ->orWhere(
                'excerpt', 
                'LIKE', 
                '%'.$request->get('search').'%'
            )
            ->orWhere(
                'subtitle', 
                'LIKE', 
                '%'.$request->get('search').'%'
            )
            ->orWhere(
                'presentation',
                'LIKE',
                '%'.$request->get('search').'%'
            )
            ->orWhere(
                'resume',
                'LIKE',
                '%'.$request->get('search').'%'
            )
            ->get();
        
        $search = $request->get('search');
        return view('recherche', compact('pages', 'search'));
    }
    
}
