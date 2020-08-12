<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Formation;
use App\Conseil;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/formation/{id}', 'SiteController@formation')->name('formation');
Route::get('/f/{slug}', 'SiteController@formationBySlug')->name('formation_slug');
Route::get('/conseil/{slug}', 'SiteController@conseilBySlug')->name('conseil_slug');
Route::get('/c/{slug}', 'SiteController@categorie')->name('categorie');
Route::get('/sc/{slug}', 'SiteController@sousCategorie')->name('sous_categorie');

Route::get('/contact/{id?}/{session?}', 'SiteController@contact')->name('contact');
Route::post('/contact', ['as'=>'contact.store','uses'=>'SiteController@contactPost']);
Route::post('/contact/{id}', ['as'=>'contact.store.form','uses'=>'SiteController@contactPost']);

Route::get('/recrutement', 'SiteController@contactRecrutement')->name('contact_recrutement');
Route::post('/recrutement', ['as'=>'contact_recrutement.store','uses'=>'SiteController@contactRecrutementPost']);

Route::post('/recherche', ['as'=>'recherche','uses'=>'SiteController@recherche']);

Route::get('/mentions-legales', 'SiteController@mentionsLegales')->name('mentions_legales');
Route::get('/infos-pratiques', 'SiteController@infosPratiques')->name('infos_pratiques');
Route::get('/cgv', 'SiteController@cgv')->name('cgv');
Route::get('/demarche-qualite', 'SiteController@demarcheQualite')->name('demarche_qualite');

Route::get('/faqs', 'SiteController@faqs')->name('faqs');
Route::get('/faq/{slug}', 'SiteController@faq')->name('faq_slug');
Route::get('/faq_categ/{slug}', 'SiteController@categorieFaq')->name('faq_categ');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
