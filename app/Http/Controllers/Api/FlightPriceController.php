<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FlightPriceController extends Controller
{
    //
	// For Singapore Flight Prices
     public function singapore_get_price()
	 {
	 	$response = \Unirest\Request::get("https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/browseroutes/v1.0/MM/USD/en-US/RGN-sky/SG-sky/anytime?inboundpartialdate=2019-12-01",
		  array(
		    "X-RapidAPI-Host" => "skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
		    "X-RapidAPI-Key" => "a33b0e4869msh5c452a3da204d4ap1e0440jsn4fbe64333c15"
		  )
		);

		return response()->json($response);
	 }
}
