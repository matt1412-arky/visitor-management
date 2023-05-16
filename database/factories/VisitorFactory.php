<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Visitor;
use App\Models\KaryawanGA;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visitor>
 */
class VisitorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Visitor::class;
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => bcrypt('12345678'),
            'phone' => '08' . fake()->phoneNumber(),
            'invitation_from' => fake('us_US')->randomElements(KaryawanGA::all())[0],
            'visitation_purpose' => fake()->word(),
            'waktu_kunjungan' => fake()->dateTime(),
            'role_id' => 4
        ];
    }
}
