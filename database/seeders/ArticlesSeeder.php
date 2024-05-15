<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            'gambar' => null,
            'judul' => null,
            'author' => null,
            'text_article' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
