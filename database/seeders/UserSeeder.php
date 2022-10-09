<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('JPN');
        foreach (range(0, 10) as $i) {
            DB::table('users')->insert([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'role_id' => $faker->numberBetween(1, 6),
                'password' => hash::make('12345678'),
            ]);
        }
    }
}
