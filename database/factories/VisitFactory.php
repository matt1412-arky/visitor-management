<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Visit;
use Illuminate\Support\Facades\DB;

class VisitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Visit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_appointment' => function () {
                // Mendapatkan id_karyawan secara acak dari database
                return DB::table('appointment')->pluck('id')->random();
            },
            'checkin' => $this->faker->randomElement(['checkin', 'pending']),
            'checkout' => $this->faker->randomElement(['checkout', 'pending']),
        ];
    }
}
