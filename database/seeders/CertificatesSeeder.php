<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CertificatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('certificates')->insert([
            'nama' => null,
            'lembaga' => null,
            'pdf' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
