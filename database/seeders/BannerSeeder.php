<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('banners')->insert([
            'id' => (string) Str::uuid(),
            'banner' => "gambar.png",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
