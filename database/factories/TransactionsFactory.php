<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transactions>
 */
class TransactionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $totalBilled = fake()->numberBetween(10000, 100000);
        $billedApp = fake()->numberBetween(10000, $totalBilled);
        $getewayCost = 5;
        $taxCost = 6;

        $totalPercentageCost = $getewayCost + $taxCost  / 100;

        $realProfit = $totalBilled * $totalPercentageCost;

        return [
            'hiring' => fake()->numberBetween(10000, 100000),
            'total_billed' => $totalBilled,
            'billed_app' => $billedApp,
            'geteway_cost' => $getewayCost,
            'tax_cost' => $taxCost,
            'real_profit' => $realProfit,
        ];
    }
}