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
    $categories = App\Categorie::distinct('nom')->get();
    return view('home', compact('categories'));
});

Route::get('/formation/{id}', 'SiteController@formation')->name('formation');
Route::get('/categorie/{slug}', 'SiteController@categorie')->name('categorie');
Route::get('/sous_categorie/{slug}', 'SiteController@sous_categorie')->name('sous_categorie');

Route::get('/contact/{id?}', 'SiteController@contact')->name('contact');
Route::post('/contact', ['as'=>'contact.store','uses'=>'SiteController@contactPost']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
/*
Route::get('/formation/{id}',function($id){
    $formation = App\Formation::where('id','=',$id)->firstOrFail();
    $categories = App\Categorie::distinct('nom')->get();
    return view ('formation',compact('categories','formation'));
})->name('formation');

Route::get('/categorie/{slug}',function($slug){
    $categorie = App\Categorie::where('slug',$slug)->first();
    $categories = App\Categorie::distinct('nom')->get();
    $formations = $categorie->formations()->get();
    return view ('categorie',compact('categories','categorie','formations'));
})->name('categorie');

Route::get('/sous_categorie/{slug}',function($slug){
    $sous_categorie = App\SousCategorie::where('slug',$slug)->first();
    $categories = App\Categorie::distinct('nom')->get();
    $formations = $sous_categorie->formations()->get();
    return view ('sous_categorie',compact('categories','sous_categorie','formations'));
})->name('sous_categorie');*/