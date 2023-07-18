<?php

namespace Database\Seeders;

use App\Models\Komputer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KomputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Komputer::create([
            'merek'  => 'ASUS',
            'bulan' => 1,
            'tahun' => 2023,
            'jumlah' => 250,
        ]);

        Komputer::create([
            'merek'  => 'LENOVO',
            'bulan' => 1,
            'tahun' => 2023,
            'jumlah' => 150,
        ]);

        Komputer::create([
            'merek'  => 'ACER',
            'bulan' => 1,
            'tahun' => 2023,
            'jumlah' => 200,
        ]);

        Komputer::create([
            'merek'  => 'HP',
            'bulan' => 1,
            'tahun' => 2023,
            'jumlah' => 180,
        ]);

        Komputer::create([
            'merek'  => 'APPLE',
            'bulan' => 1,
            'tahun' => 2023,
            'jumlah' => 190,
        ]);

        Komputer::create([
            'merek'  => 'ASUS',
            'bulan' => 2,
            'tahun' => 2023,
            'jumlah' => 220,
        ]);

        Komputer::create([
            'merek'  => 'LENOVO',
            'bulan' => 2,
            'tahun' => 2023,
            'jumlah' => 121,
        ]);

        Komputer::create([
            'merek'  => 'ACER',
            'bulan' => 2,
            'tahun' => 2022,
            'jumlah' => 170,
        ]);

        Komputer::create([
            'merek'  => 'HP',
            'bulan' => 2,
            'tahun' => 2023,
            'jumlah' => 164,
        ]);

        Komputer::create([
            'merek'  => 'APPLE',
            'bulan' => 2,
            'tahun' => 2023,
            'jumlah' => 138,
        ]);
    }
}
