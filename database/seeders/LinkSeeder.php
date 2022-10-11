<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LinkVisitor;
use App\Models\User;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() //php artisan db:seed --class=LinkSeender
    {
        $faker = Faker::create();
        $user_ids = User::all(['id']);
        foreach (range(0, 10) as $i) {
            LinkVisitor::create([
                'user_id' => $faker->randomElement($user_ids)['id'],
                'token' => Str::random(64),
                'status' => 'sent',
            ]);
        }
    }
}
