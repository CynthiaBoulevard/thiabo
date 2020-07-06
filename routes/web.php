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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('', 'WelcomeController@index')->name('welcome.index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin', 'HomeController@admin')->middleware('admin');


// crud products (ateliers)

Route::resource('admin/products','ProductController', ['middleware' => 'admin']);


Route::get('products',['middleware' => 'auth', function () {
    return view('admin/admin');
}]);



// formulaire de reservtaion page accueil
Route::post('/reservation','ReservationController@sendMessage')->name('reservation.send');
// Route::get('admin/reservation','ReservationController@index');
// Route::get('/reservation','ReservationController@create');
// Route::get('/reservation','ReservationController@create');


Route::resource('admin/reservation','ReservationController', ['middleware' => 'admin']);

Route::get('reservation',['middleware' => 'auth', function () {
    return view('admin/admin');
}]);




// formulaire de contact page accueil
Route::post('/contact','ContactController@sendMessage')->name('contact.send');

Route::resource('admin/contact','ContactController', ['middleware' => 'admin'] );

Route::get('contact',['middleware' => 'auth', function () {
    return view('admin/admin');
}]);




