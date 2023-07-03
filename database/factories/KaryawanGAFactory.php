<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\KaryawanGA;

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
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'password' => bcrypt('12345678'),
            'devisi' => $this->faker->word(),
            'jabatan' => $this->faker->word(),
            'role_id' => $this->faker->numberBetween(2, 3)
        ];
    }
}

    // "Database\\Factories\\": "database/factories/",
