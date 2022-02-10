<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Hotel;

class HotelFactory extends Factory
{

    protected $model = Hotel::class; 

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'rating' => $this->faker->numberBetween(1,5),
            'address' => $this->faker->address(),
            'supplier' => $this->faker->randomElement(['Own', 'HotelBeds', 'SunHotels']),
            'active' => $this->faker->randomElement([true, false]),
        ];
    }
}
