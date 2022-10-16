<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\KaryawanGA;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KaryawanGA>
 */
class KaryawanGAFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = KaryawanGA::class;
    public function definition()
    {
        return [
            'NIK' => time() . random_int(1111, 9999),
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'password' => Hash::make('12345678'),
            'devisi' => $this->faker->word(),
            'jabatan' => $this->faker->word(),
            'role_id' => $this->faker->numberBetween(1, 6)
        ];
    }
}

    // "Database\\Factories\\": "database/factories/",
