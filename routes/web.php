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
Route::get('admin', 'HomeController@admin')->middleware('admin');


// formulaire de reservtaion page accueil
Route::post('/reservation','ReservationController@sendMessage')->name('reservation.send');

// formulaire de contact page accueil
Route::post('/contact','ContactController@sendMessage')->name('contact.send');


// formulaire de contact page admin
Route::get('contacte','Admin\ContacteController@index')->name('contacte.index');


// Carrousel
Route::resource('/carrousel','Admin\CarrouselController');


// route User
Route::get('user',['middleware' => 'auth', function () {
    return view('user/user');
}]);


// route atelier
Route::resource('products','ProductController');


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

