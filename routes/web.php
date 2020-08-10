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
    $formations_header = Formation::distinct('nom')->whereNotNull('categorie_id')->where("nom","!=","default")->orderBy('nom', 'ASC')->get();
    $conseils_header = Conseil::distinct('certification')->orderBy('certification', 'ASC')->get();
    return view('home', compact('formations_header','conseils_header'));
});

Route::get('/formation/{id}', 'SiteController@formation')->name('formation');
Route::get('/f/{slug}', 'SiteController@formationBySlug')->name('formation_slug');
Route::get('/conseil/{slug}', 'SiteController@conseilBySlug')->name('conseil_slug');
Route::get('/c/{slug}', 'SiteController@categorie')->name('categorie');
Route::get('/sc/{slug}', 'SiteController@sous_categorie')->name('sous_categorie');

Route::get('/contact/{id?}/{session?}', 'SiteController@contact')->name('contact');
Route::post('/contact', ['as'=>'contact.store','uses'=>'SiteController@contactPost']);
Route::post('/contact/{id}', ['as'=>'contact.store.form','uses'=>'SiteController@contactPost']);

Route::get('/recrutement', 'SiteController@contactRecrutement')->name('contact_recrutement');
Route::post('/recrutement', ['as'=>'contact_recrutement.store','uses'=>'SiteController@contactRecrutementPost']);

Route::post('/recherche', ['as'=>'recherche','uses'=>'SiteController@recherche']);

Route::get('/mentions-legales', 'SiteController@mentions_legales')->name('mentions_legales');
Route::get('/infos-pratiques', 'SiteController@infos_pratiques')->name('infos_pratiques');
Route::get('/cgv', 'SiteController@cgv')->name('cgv');
Route::get('/demarche-qualite', 'SiteController@demarche_qualite')->name('demarche_qualite');

Route::get('/faqs', 'SiteController@faqs')->name('faqs');
Route::get('/faq/{slug}', 'SiteController@faq')->name('faq_slug');
Route::get('/faq_categ/{slug}', 'SiteController@faq_categories')->name('faq_categ');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
