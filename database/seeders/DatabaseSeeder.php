<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ContactSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder yang telah dibuat
        $this->call(ContactSeeder::class);
        $this->call(AdministratorUserSeeder::class);
        $this->call(UlasanSeeder::class);
        $this->call(KotaSeeder::class);
    }
}
