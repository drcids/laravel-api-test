<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HotelReview;

class HotelReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HotelReview::factory()->count(50)->create();
    }
}
