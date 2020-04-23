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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');
Route::resource('/carrousel','Admin\CarrouselController');




// route User
Route::get('/user', function () {
    return view('user');
});



// FRONT-END


// route Accueil
Route::get('/', function () {
    return view('welcome');
});


// route Galerie
Route::get('/galerie', function () {
    return view('galerie');
});


// route Atelier
Route::get('/atelier', function () {
    return view('atelier');
});

