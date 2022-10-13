<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Link;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barcode>
 */
class BarcodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_generate_link' => fake()->randomElements(Link::all(['id']))[0],
            'status' => 'pending'
        ];
    }
}
