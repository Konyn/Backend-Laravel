<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Downloads>
 */
class DownloadsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $totalDownloadsIos =  fake()->numberBetween(10000, 1000000);
        $totalDownloadsAndroid = fake()->numberBetween(10000, 1000000);

        return [
            'total_ios' => $totalDownloadsIos,
            'total_android' => $totalDownloadsAndroid,
            'total_downloads' => $totalDownloadsIos + $totalDownloadsAndroid
        ];
    }
}