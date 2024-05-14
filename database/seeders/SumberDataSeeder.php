<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SumberDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('sumber_data')->insert([
            'jumlah_lembaga' => null,
            'jumlah_guru' => null,
            'jumlah_peserta' => null,
            'jumlah_rombel' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
