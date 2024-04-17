<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run()
    {

        foreach (range(1, 10) as $index) {
            \App\Comment::create([
                'content' => faker()->paragraph,
                'is_active' => faker()->boolean,
                'property_id' => faker()->numberBetween(1, 10),
                'user_id' => faker()->numberBetween(1, 10),
            ]);
        }
    }
}
