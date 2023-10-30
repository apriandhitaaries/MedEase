<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Datapasien;

class DatapasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Datapasien::create([
            'nama' => 'Faishal',
            'nik' => '1234567890'
        ]);

        Datapasien::create([
            'nama' => 'Resty',
            'nik' => '0987654321'
        ]);

        // Tambahkan data pasien lainnya sesuai kebutuhan
    }
}
