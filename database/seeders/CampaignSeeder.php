<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('campaigns')->insert([
            [
                'title' => 'Donasi Banjir',
                'description' => 'Membantu korban banjir',
                'target_donation' => 10000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Bantuan Pendidikan',
                'description' => 'Membantu biaya sekolah',
                'target_donation' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}