<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(
        //     [RoleSeeder::class]
        // );
        \App\Models\KaryawanGA::factory()->count(50)->create();
        \App\Models\Visit::factory(50)->create();
        // \App\Models\Barcode::factory(10)->create();

        // \App\Models\Role::factory()->count(6)->create();
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
