<?php

namespace Database\Seeders;

use App\Models\UserTraffic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTrafficSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserTraffic::factory()->count(1)->create();
    }
}