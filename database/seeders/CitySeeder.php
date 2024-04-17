<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    public function run()
    {


        foreach (range(1, 10) as $index) {
            \App\City::create([
                'name' => faker()->city,
            ]);
        }
    }
}
