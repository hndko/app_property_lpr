<?php

namespace Database\Seeders;

use App\Models\Agent;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Seed 10 agents
        for ($i = 0; $i < 10; $i++) {
            // Download random image from Lorem Picsum
            // Download random image from Lorem Picsum
            $imageContent = file_get_contents('https://picsum.photos/200');
            $imageName = 'agent_' . $i . '.jpg';
            $imagePath = 'public/images/foto_sampul/' . $imageName;

            // Store the image in the storage
            Storage::put($imagePath, $imageContent);

            Agent::create([
                'foto_sampul' => $imageName,
                'nama_lengkap' => $faker->name,
                'no_telpon' => $faker->phoneNumber,
                'instagram' => $faker->userName,
                'twitter' => $faker->userName,
                'facebook' => $faker->userName,
                'linked_in' => $faker->userName,
            ]);
        }
    }
}
