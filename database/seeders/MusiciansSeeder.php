<?php

namespace Database\Seeders;

use App\Models\Musicians;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MusiciansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Musicians::factory()->count(1)->create();
    }
}