<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class VisitorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $visitors = [];

        for ($i = 1; $i <= 80; $i++) {
            $name = $faker->name;
            $email = str_replace(' ', '', strtolower($name)) . '@example.com';

            $visitor = [
                'name' => $name,
                'email' => $email,
                'password' => bcrypt('12345678'),
                'phone' => $this->generateRandomPhone(),
                'invitation_from' => $this->generateRandomName(),
                'visitation_purpose' => $this->generateRandomPurpose(),
                'visit_date' => now()->addDays($i),
                'arrival_time' => now()->addHours($i),
                'role_id' => 4,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $visitors[] = $visitor;
        }

        DB::table('visitors')->insert($visitors);
    }

    /**
     * Generate a random phone number with a maximum length of 12.
     *
     * @return string
     */
    private function generateRandomPhone()
    {
        $phone = '';

        for ($i = 0; $i < 12; $i++) {
            $phone .= mt_rand(0, 9);
        }

        return $phone;
    }

    /**
     * Generate a random name.
     *
     * @return string
     */
    private function generateRandomName()
    {
        $faker = Faker::create();
        return $faker->name;
    }

    /**
     * Generate a random purpose value.
     *
     * @return string
     */
    private function generateRandomPurpose()
    {
        $purposes = ['Meeting', 'Company Visit'];
        $index = array_rand($purposes);

        return $purposes[$index];
    }
}
