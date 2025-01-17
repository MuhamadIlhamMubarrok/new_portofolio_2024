<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class TestimoniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonies')->insert([
            'id' => (string) Str::uuid(),
            'gambar' => null,
            'nama' => null,
            'text_testimoni' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
