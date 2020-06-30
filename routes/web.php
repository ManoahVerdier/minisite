<?php

use Illuminate\Support\Facades\Route;

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
    $formations = App\Formation::all();
    return view('home', compact('formations'));
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/formation/{id}',function($id){
    $formation = App\Formation::where('id','=',$id)->firstOrFail();
    return view ('formation',compact('formation'));
})->name('formation');