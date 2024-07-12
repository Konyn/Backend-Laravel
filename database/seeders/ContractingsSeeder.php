<?php

namespace Database\Seeders;

use App\Models\Contractings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contractings::factory()->count(1)->create();
    }
}