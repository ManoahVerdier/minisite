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
Route::get('/categorie/{slug}', 'SiteController@categorie')->name('categorie');
Route::get('/sous_categorie/{slug}', 'SiteController@sous_categorie')->name('sous_categorie');

Route::get('/contact/{id?}/{session?}', 'SiteController@contact')->name('contact');
Route::get('/contact_test/{id?}/{session?}', 'SiteController@contact')->name('contact');
Route::post('/contact', ['as'=>'contact.store','uses'=>'SiteController@contactPost']);
Route::post('/contact/{id}', ['as'=>'contact.store.form','uses'=>'SiteController@contactPost']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
