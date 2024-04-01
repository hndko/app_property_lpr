<?php

namespace Database\Seeders;

use App\Models\Property;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Seed 10 properties
        for ($i = 0; $i < 10; $i++) {
            // Generate random image
            $imageContent = file_get_contents('https://picsum.photos/500/250');
            $imageName = 'property_' . $i . '.jpg';
            $imagePath = 'public/images/foto_property/' . $imageName;

            // Store the image in the storage
            Storage::put($imagePath, $imageContent);

            // Create property
            Property::create([
                'slug' => $faker->slug,
                'foto_sampul' => $imageName,
                'property_name' => $faker->name,
                'agent_id' => $faker->numberBetween(1, 10), // Assuming there are agents with IDs from 1 to 10
                'kota_id' => $faker->numberBetween(1, 4), // Assuming there are cities with IDs from 1 to 5
                'harga' => $faker->numberBetween(100000, 1000000),
                'sertifikat' => $faker->word,
                'kondisi' => $faker->word,
                'luas_tanah' => $faker->numberBetween(50, 200),
                'luas_bangunan' => $faker->numberBetween(50, 200),
                'alamat' => $faker->address,
                'kelengkapan' => $faker->word,
                'jumlah_lantai' => $faker->numberBetween(1, 3),
                'kamar_tidur' => $faker->numberBetween(1, 5),
                'kamar_mandi' => $faker->numberBetween(1, 3),
                'watt_listrik' => $faker->numberBetween(1000, 5000),
                'deskripsi' => $faker->paragraph,
                'is_status' => '1',
            ]);
        }
    }
}
