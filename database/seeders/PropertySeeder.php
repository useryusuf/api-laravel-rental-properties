<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;
use App\Models\Category;
use Faker\Factory as Faker;

class PropertySeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            $category = Category::inRandomOrder()->first();

            Property::create([
                'description' => $faker->text,
                'price' => $faker->randomFloat(2, 100, 1000),
                'city_id' => $faker->numberBetween(1, 10),
                'address' => $faker->address,
                'images' => $faker->imageUrl(),
                'status' => $faker->randomElement(["active", "inactive"]),
                'user_id' => $faker->numberBetween(1, 10),
                'category_id' => $category->id,
                "deposite" => $faker->numberBetween(1000, 10000),
                "ready_date" => $faker->dateTimeThisDecade(),
                "rooms" => $faker->numberBetween(1, 10),
                "space" => $faker->numberBetween(10, 1000),
                "renting_type" => $faker->randomElement(["monthly", "daily", "yearly"])
            ]);
        }
    }
}
