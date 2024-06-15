<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('messages')->insert([
            'id' => (string) Str::uuid(),
            'firstName' => "muhamad",
            'lastName' => "ilham",
            'email' => "ilham@gmail.com",
            'message' => "aku ganteng",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
