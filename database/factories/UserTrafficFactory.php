<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserTraffic>
 */
class UserTrafficFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'accesses_web' => fake()->numberBetween(10000, 100000),
            'accesses_ios' => fake()->numberBetween(10000, 100000),
            'accesses_google' => fake()->numberBetween(10000, 100000),
        ];
    }
}