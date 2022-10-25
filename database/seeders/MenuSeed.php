<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 100) as $value) {
            $menus = [
                'name' => fake()->name(),
                'description' => fake()->paragraph(),
                'harga' => fake()->numberBetween(15000,),
                'gambar' => fake()->imageUrl(null, 250, 250, 'foods'),
                'type' => fake()->randomElement(['food', 'beverage']),
                'created_at' => now(),
                'updated_at' => now(),
            ];
            DB::table('menus')->insert($menus);
        }
    }
}
