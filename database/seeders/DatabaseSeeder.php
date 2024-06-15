<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        $this->call(UserSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(CountSeeder::class);
        $this->call(ProjekSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(TestimoniesSeeder::class);
        $this->call(MessageSeeder::class);
    }
}
