<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PedomenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('pedomen')->insert([
            'gambar' => null,
            'pdf' => null,
            'judul' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
