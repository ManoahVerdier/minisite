<?php
/** 
 * Page routes du web
 * 
 * PHP version 7.3
 * 
 * @category Routes
 * @package  Routes
 * @author   Manoah Verdier <verdier.developpement@gmail.com>
 * @license  http://certificationiso.fr/mentions-legales Custom Licence
 * @link     http://certificationiso.fr
 */
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', 'SiteController@homepage');


Route::get('/p/{slug}', 'SiteController@page')
    ->name('page');
Route::get('/produit/{slug}', 'SiteController@page_produit')
    ->name('page_produit');

Route::post('/recherche', ['as'=>'recherche','uses'=>'SiteController@recherche']);
Route::get('/recherche', 'SiteController@rechercheGet');

Route::get('/mentions-legales', 'SiteController@mentionsLegales')
    ->name('mentions_legales');
Route::get('/infos-pratiques', 'SiteController@infosPratiques')
    ->name('infos_pratiques');
Route::get('/cgv', 'SiteController@cgv')
    ->name('cgv');
Route::get('/demarche-qualite', 'SiteController@demarcheQualite')
    ->name('demarche_qualite');
Route::get('/a-propos-nous', 'SiteController@aPropos')
    ->name('aPropos');

Route::get('/faqs', 'SiteController@faqs')->name('faqs');
Route::get('/faq/{slug}', 'SiteController@faq')->name('faq_slug');
Route::get('/faq_categ/{slug}', 'SiteController@categorieFaq')->name('faq_categ');

Route::group(
    ['prefix' => 'admin'], 
    function () {
        Voyager::routes();
    }
);
