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
// Route::get('admin/reservation','ReservationController@index');
// Route::get('/reservation','ReservationController@create');
// Route::get('/reservation','ReservationController@create');


Route::resource('admin/reservation','ReservationController');




// formulaire de contact page accueil
Route::post('/contact','ContactController@sendMessage')->name('contact.send');


// route User
Route::get('user',['middleware' => 'auth', function () {
    return view('user/user');
}]);


// route Accueil
Route::get('/', function () {
    return view('welcome');
});
