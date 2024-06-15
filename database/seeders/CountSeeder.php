<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('counts')->insert([
            'id' => (string) Str::uuid(),
            'judul_count' => "projek",
            'count' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
