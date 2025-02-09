<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testGetHotelByIdStatus(){

        $response = $this->get('/api/getHotelById/5');
        $response->assertStatus(200);

    }

    public function testGetHotelByIdResponseStructure(){

        $response = $this->get('/api/getHotelById/150');
        $response->assertJsonStructure(['name', 'rating', 'reviews']);

    }
}
