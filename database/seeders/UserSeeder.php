<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {

        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            User::create([
                'firstname' => $faker->firstName,
                'name' => $faker->firstName,
                'lastname' => $faker->lastName,
                'password' => Hash::make($faker->password),
                'email' => $faker->unique()->safeEmail,
                'avatar' => $faker->imageUrl(),
                'phone1' => $faker->phoneNumber,
                'phone2' => $faker->phoneNumber
            ]);
        }
    }
}
