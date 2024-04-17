<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
   public function run()
    {

        foreach (range(1, 10) as $index) {
            \App\Category::create([
                'name' => faker()->word,
            ]);
        }
    }
}
