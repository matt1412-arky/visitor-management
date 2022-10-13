<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
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
            'password' => Hash::make('12345678'),
            'age' => fake()->numberBetween(15, 55),
            'phone' => '08' . random_int(1111, 9999),
            'invitation_from' => fake('us_US')->randomElements(KaryawanGA::all())[0],
            'visitation_purpose' => fake()->word(),
            'waktu_kunjungan' => '',
            'transportasi_visitor' => '',
            'plat_nomor' => '',
            'picture' => '',
            'file_surat' => '',
            'no_darurat' => '',
            'role_id' => 6
        ];
    }
}
