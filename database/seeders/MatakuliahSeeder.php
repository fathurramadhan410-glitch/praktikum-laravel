<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matakuliah;
use App\Models\Mahasiswa;

class MatakuliahSeeder extends Seeder
{
    public function run(): void
    {
        Matakuliah::factory()->count(20)->create();

        // Setiap mahasiswa mengambil 2-4 mata kuliah acak
        foreach (Mahasiswa::all() as $mhs) {
            $mhs->matakuliahs()->attach(
                Matakuliah::inRandomOrder()->limit(fake()->numberBetween(2, 4))->pluck('id')
            );
        }
    }
}