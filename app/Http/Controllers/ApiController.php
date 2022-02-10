<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classes\HotelClass;

class ApiController extends Controller
{
    public function __construct() {}

    private function returnResponse($response){

        return response()->json($response['body'], $response['statusCode']);

    }

    public function getHotelById(Request $request){

        $hotelClass = new HotelClass;
        $response = $hotelClass->getActiveHotelById($request->id);
        return $this->returnResponse($response);
    }
}
