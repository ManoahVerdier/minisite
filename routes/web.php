<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    $categories = App\Categorie::distinct('nom')->orderBy('nom','ASC')->get();
    return view('home', compact('categories'));
});

Route::get('/formation/{id}', 'SiteController@formation')->name('formation');
Route::get('/f/{slug}', 'SiteController@formationBySlug')->name('formation_slug');
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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
