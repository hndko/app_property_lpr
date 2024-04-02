<?php

namespace Database\Seeders;

use App\Models\PengaturanUmum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengaturanUmumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PengaturanUmum::create([
            'nama_website' => 'Ladang Padi Resor',
            'alamat' => 'Jl.Pengadegan Timur I No.30, Kelurahan Pengadegan, Kecamatan Pancoran, Jakarta Selatan 12770',
            'no_telpon' => '0217980616',
            'email' => 'aptpancoranriverside@gmail.com',
            'day_start' => 'Senin',
            'day_end' => 'Minggu',
            'hours_start' => '08:00',
            'hours_end' => '16:00',
            'instagram' => null,
            'twitter' => null,
            'facebook' => null,
            'linkedin' => null,
        ]);
    }
}
