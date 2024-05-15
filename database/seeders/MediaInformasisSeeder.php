<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MediaInformasisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('media_informasis')->insert([
            'judul' => null,
            'gambar' => null,
            'link' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
