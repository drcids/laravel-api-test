<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Classes\HotelClass;
Use App\Models\Hotel;

class HotelTest extends TestCase
{
    
    public function testGetActiveHotelByIdResponseStructure(){
        
        $hotelClass = new HotelClass;
        $result = $hotelClass->getActiveHotelById(5);
        $this->assertArrayHasKey('body',$result);
        $this->assertArrayHasKey('statusCode', $result);

    }

    public function testFilterHotelDataStructure(){
        
        $hotel = Hotel::factory()->create();

        $hotelClass = new HotelClass;
        $result = $hotelClass->filterHotelData($hotel);
        $this->assertArrayHasKey('name',$result);
        $this->assertArrayHasKey('rating', $result);
        $this->assertArrayHasKey('reviews', $result);

    }
}
