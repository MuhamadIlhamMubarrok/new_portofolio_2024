<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ProjekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('projeks')->insert([
            'id' => (string) Str::uuid(),
            'banner' => "gambar.png",
            'nama' => "projeks",
            'deskripsi' => "lorem ipsum",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
