<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        // Data manual (dirimu) agar tetap tampil
        Mahasiswa::create([
            'nim'      => 'C050425007',
            'nama'     => 'Fathur Ramadhan',
            'email'    => 'c050425007@mahasiswa.poliban.ac.id',
            'prodi'    => 'Sistem Informasi Kota Cerdas',
            'semester' => '3',
        ]);

        // 49 data dummy dari factory
        Mahasiswa::factory()->count(49)->create();
    }
}