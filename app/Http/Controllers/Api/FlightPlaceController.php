<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
// use Unirest\Request;
use App\Http\Controllers\Controller;

class FlightPlaceController extends Controller
{
    
    // For Myanmar Flight Lists Api
    public function myanmar_get_place()
    {
    	$myanmar = \Unirest\Request::get("https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/autosuggest/v1.0/MM/GBP/en-GB/?query=Myanmar",
		  array(
		    "X-RapidAPI-Host" => "skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
		    "X-RapidAPI-Key" => "a33b0e4869msh5c452a3da204d4ap1e0440jsn4fbe64333c15"
		  )
		);
		return response()->json($myanmar);
	 }

	 

	 // For Thailand Flight Lists Api
	 public function thailand_get_place()
	 {
	 	$thailand = \Unirest\Request::get("https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/autosuggest/v1.0/TH/GBP/en-GB/?query=Thailand",
		  array(
		    "X-RapidAPI-Host" => "skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
		    "X-RapidAPI-Key" => "a33b0e4869msh5c452a3da204d4ap1e0440jsn4fbe64333c15"
		  )
		);
		return response()->json($thailand);

	 }

	 // For Singapore Flight Lists Api
	 public function singapore_get_place()
	 {
	 	$singapore = \Unirest\Request::get("https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/autosuggest/v1.0/SI/GBP/en-GB/?query=Singapore",
		  array(
		    "X-RapidAPI-Host" => "skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
		    "X-RapidAPI-Key" => "a33b0e4869msh5c452a3da204d4ap1e0440jsn4fbe64333c15"
		  )
		);

		return response()->json($singapore);
	 }

	 public function all_place()
	 {
	 	$response = \Unirest\Request::get("https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/reference/v1.0/currencies",
		  array(
		    "X-RapidAPI-Host" => "skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
		    "X-RapidAPI-Key" => "a33b0e4869msh5c452a3da204d4ap1e0440jsn4fbe64333c15"
		  )
		);
		return response()->json($response);
	 }

	
}
