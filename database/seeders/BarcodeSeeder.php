<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VisitorRegis;
use App\Models\BarcodeStatus;
use Faker\Factory as Faker;

class BarcodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(
        /**php artisan db:seed --class=BarcodeSeeder*/
    )
    {
        $faker = Faker::create();
        $visitors = VisitorRegis::all(['id']);
        foreach (range(1, count($visitors)) as $num) {
            BarcodeStatus::insert([
                'id_regis_visitor' => $faker->randomElement($visitors)['id'],
                'status' => $faker->randomElement(['approve', 'pending']),
            ]);
        }
    }
}
