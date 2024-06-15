<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('clients')->insert([
            'id' => (string) Str::uuid(),
            'gambar' => "gambar.png",
            'nama' => "ilham",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
