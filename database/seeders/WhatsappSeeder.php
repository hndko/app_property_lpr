<?php

namespace Database\Seeders;

use App\Models\Whatsapp;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WhatsappSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Whatsapp::create([
            'no_telpon' => '8123456789',
            'text_whatsapp' => 'Halo saya memiliki beberapa pertanyaan?',
        ]);
    }
}
