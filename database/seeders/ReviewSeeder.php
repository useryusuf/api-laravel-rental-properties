<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run()
    {

        foreach (range(1, 10) as $index) {
            \App\Review::create([
                'property_id' => faker()->numberBetween(1, 10),
                'user_id' => faker()->numberBetween(1, 10),
                'review' => faker()->paragraph,
                'rating' => faker()->numberBetween(1, 5),
            ]);
        }
    }
}
