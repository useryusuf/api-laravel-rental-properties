<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    public function run()
    {

        foreach (range(1, 10) as $index) {
            \App\Like::create([
                'user_id' => faker()->numberBetween(1, 10),
                'property_id' => faker()->numberBetween(1, 10),
            ]);
        }
    }
}
