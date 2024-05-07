<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('heroes')->insert([
            'marquee_text' => null,
            'title' => null,
            'text' => null,
            'image' => null,
            'cta_1' => null,
            'cta_2' => null,
            'whatsapp' => null,
            'instagram' => null,
            'youtube' => null,
            'facebook' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
