<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use Faker\Factory as Faker;

class CommentSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            Comment::create([
                'content' => $faker->paragraph,
                'is_active' => $faker->boolean,
                'property_id' => $faker->numberBetween(1, 10),
                'user_id' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
