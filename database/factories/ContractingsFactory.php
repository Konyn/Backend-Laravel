<?php

namespace Database\Factories;

use App\Models\Musicians;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contractings>
 */
class ContractingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $musicians = Musicians::inRandomOrder()->first();
        return [
            'physical_person' => fake()->numberBetween($musicians->active_musicians, $musicians->total_registered),
            'legal_person' => fake()->numberBetween($musicians->active_musicians, $musicians->total_registered),
        ];
    }
}