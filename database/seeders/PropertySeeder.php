<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    public function run()
    {

        foreach (range(1, 10) as $index) {
            \App\Property::create([
                'description' => faker()->text,
                'price' => faker()->randomFloat(2, 100, 1000),
                'city_id' => faker()->numberBetween(1, 10),
                'address' => faker()->address,
                'images' => faker()->imageUrl(),
                'is_active' => faker()->boolean,
                'user_id' => faker()->numberBetween(1, 10),
            ]);
        }
    }
}
