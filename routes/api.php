<?php 
// use GuzzleHttp\Client;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

	// Fro Flight Places
// Route::get('flights/mm/places','Api\FlightPlaceController@myanmar_get_place');
Route::get('flights/th/places','Api\FlightPlaceController@thailand_get_place');
Route::get('flights/si/places','Api\FlightPlaceController@singapore_get_place');

	//For Flight Prices
Route::get('flights/si/prices','Api\FlightPriceController@singapore_get_price');
Route::get('flights/all/places','Api\FlightPlaceController@all_place');


// Route::resource('users', function(){
// 	return User::all();
// });
Route::resource('users', 'Api\UserController');
// Route::get('/mm/places', function() {
	
// 	$response = Unirest\Request::get("https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/autosuggest/v1.0/MM/GBP/en-GB/?query=Myanmar",
// 	  array(
// 	    "X-RapidAPI-Host" => "skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
// 	    "X-RapidAPI-Key" => "a33b0e4869msh5c452a3da204d4ap1e0440jsn4fbe64333c15"
// 	  )
// 	);
// 	return response()->json($response);
// });