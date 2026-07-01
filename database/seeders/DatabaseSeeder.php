<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Campaign;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Campaign::create([
            'title' => 'Donasi Erupsi Gunung Semeru',
            'description' => 'Bantuan untuk korban erupsi Gunung Semeru.',
            'target_donation' => 50000000,
            'collected_donation' => 25000000,
            'deadline' => '2026-12-31',
        ]);

        Campaign::create([
            'title' => 'Donasi Tsunami',
            'description' => 'Bantuan bagi masyarakat terdampak tsunami.',
            'target_donation' => 100000000,
            'collected_donation' => 3000000,
            'deadline' => '2026-12-31',
        ]);

        Campaign::create([
            'title' => 'Donasi Kebakaran Hutan',
            'description' => 'Bantuan untuk korban kebakaran hutan.',
            'target_donation' => 10000000,
            'collected_donation' => 500000,
            'deadline' => '2026-12-31',
        ]);

        Campaign::create([
            'title' => 'Donasi Tanah Longsor',
            'description' => 'Bantuan bagi korban tanah longsor.',
            'target_donation' => 30000000,
            'collected_donation' => 26000000,
            'deadline' => '2026-12-31',
        ]);
    }
}