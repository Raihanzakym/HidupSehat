<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker; // Don't forget this line


class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Create an admin user
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345!'),
            'role' => 'admin', // Set default role to 'user'
        ]);

        // Use Faker to create additional users
        $faker = Faker::create();

    foreach (range(1, 10) as $index) {
        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'password' => Hash::make('12345!'),
            'role' => 'user', // Set the default role for other users
        ]);
    }
    }
}
