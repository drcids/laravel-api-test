<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Hotel;
use App\Models\HotelReview;

class HotelReviewFactory extends Factory
{
    protected $model = HotelReview::class; 

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $hotelIds = Hotel::get()->pluck('id')->toArray();
        
        return [
            'title' => $this->faker->catchPhrase(),
            'text' => $this->faker->realText(),
            'author' => $this->faker->name(),
            'hotel_id' => $this->faker->randomElement($hotelIds)
        ];
    }
}
