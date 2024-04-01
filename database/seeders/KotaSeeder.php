<?php

namespace Database\Seeders;

use App\Models\Kota;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data kota yang akan diisi
        $kotaData = [
            ['nama_kota' => 'Jakarta'],
            ['nama_kota' => 'Depok'],
            ['nama_kota' => 'Tangerang'],
            ['nama_kota' => 'Bogor']
        ];

        // Loop untuk memasukkan data ke dalam tabel
        foreach ($kotaData as $kota) {
            Kota::create($kota);
        }
    }
}
