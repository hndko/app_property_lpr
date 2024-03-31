<?php

namespace Database\Seeders;

use App\Models\Ulasan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker; // Import kelas Faker dari namespace-nya

class UlasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat instance Faker
        $faker = Faker::create();

        // Loop untuk menambahkan 5 ulasan acak
        for ($i = 0; $i < 5; $i++) {
            Ulasan::create([
                'rating' => $faker->numberBetween(1, 5), // Rating acak antara 1 dan 5
                'nama_lengkap' => $faker->name,
                'text_ulasan' => $faker->paragraph,
                'jabatan' => $faker->jobTitle,
            ]);
        }
    }
}
