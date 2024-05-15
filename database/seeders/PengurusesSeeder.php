<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PengurusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('penguruses')->insert([
            'gambar' => null,
            'nama' => null,
            'jabatan' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
