<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Musicians>
 */
class MusiciansFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $completeProfiles = fake()->numberBetween(10000, 100000);
        $totalRegistered = fake()->numberBetween($completeProfiles + 5000, 100000);

        return [
            'total_registered' => $totalRegistered,
            'active_musicians' => fake()->numberBetween($completeProfiles, $totalRegistered),
            'complete_profiles' => $completeProfiles,
        ];
    }
}