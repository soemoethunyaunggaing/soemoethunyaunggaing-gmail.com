<?php

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

// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users','UserController');
// Route::post('register', 'Auth\RegisterController@register);


Route::get('flights/mm/places','Api\FlightPlaceController@myanmar_get_place');
Route::get('flights/si/prices','Api\FlightPriceController@singapore_get_price');


