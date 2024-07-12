<?php

namespace Database\Seeders;

use App\Models\Downloads;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DownloadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Downloads::factory()->count(1)->create();
    }
}