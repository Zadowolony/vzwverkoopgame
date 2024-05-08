<?php

namespace Database\Seeders;

use App\Models\Platform;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $platforms = ['PS4', 'Xbox One', 'PC', 'Retro'];
        foreach ($platforms as $platform) {
            Platform::firstOrCreate(['platform_naam' => $platform]);
        }
    }
}