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
        // Mendapatkan id_visitor secara acak dari database
        $idVisitor = DB::table('visitors')->pluck('id')->random();

        return [
            'id_karyawan' => function () {
                // Mendapatkan id_karyawan secara acak dari database
                return DB::table('karyawan_ga')->pluck('id')->random();
            },
            'id_visitor' => $idVisitor,
            'checkin' => $this->faker->randomElement(['checkin', 'pending']),
            'checkout' => $this->faker->randomElement(['checkout', 'pending']),
        ];
    }
}
