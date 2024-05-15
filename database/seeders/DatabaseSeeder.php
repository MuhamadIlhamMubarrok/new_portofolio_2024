<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UserSeeder::class);
        $this->call(HeroSeeder::class);
        $this->call(ContactsSeeder::class);
        $this->call(SumberDataSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(ArticlesSeeder::class);
        $this->call(CertificatesSeeder::class);
        $this->call(GalleriesSeeder::class);
        $this->call(MediaInformasisSeeder::class);
        $this->call(PedomenSeeder::class);
        $this->call(PengurusesSeeder::class);
        $this->call(TestimoniesSeeder::class);
    }
}
