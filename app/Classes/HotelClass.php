<?php

namespace App\Classes;

use App\Models\Hotel;

class HotelClass{

    protected $returnMsg = [];

    public function __construct($body = null, $statusCode = 200){
        $this->returnMsg['body'] = $body;
        $this->returnMsg['statusCode'] = $statusCode;
    }

    public function getActiveHotelById($hotel_id){ 

        $hotel = Hotel::where('id', $hotel_id)->where('active', true)->first();

        $this->returnMsg['body'] = $this->filterHotelData($hotel);
        return $this->returnMsg; 

    }

    public function filterHotelData($hotel){

        if($hotel && $hotel->id){

            return [
                'name' => $hotel->name,
                'rating' => $hotel->rating,
                'reviews' => $hotel->reviews
            ];

        }else{
            return [
                'name' => null,
                'rating' => null,
                'reviews' => []
            ];;
        }

    }


        
}