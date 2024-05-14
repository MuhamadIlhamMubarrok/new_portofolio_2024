<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('contacts')->insert([
            'alamat' => null,
            'email' => null,
            'no_hp' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
