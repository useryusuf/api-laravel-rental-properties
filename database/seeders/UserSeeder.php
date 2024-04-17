<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
     public function run()
    {

        foreach (range(1, 10) as $index) {
            \App\User::create([
                'first_name' => faker()->firstName,
                'last_name' => faker()->lastName,
                'password' => Hash::make(faker()->password),
                'email' => faker()->unique()->safeEmail,
                'avatar' => faker()->imageUrl(),
                'phone' => faker()->phoneNumber,
                'role' => faker()->randomElement(['admin', 'guest', 'lessor']),
            ]);
        }
    }
}
