<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MatakuliahFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode_mk'  => fake()->unique()->bothify('MK-###'),
            'nama_mk'  => fake()->randomElement(['Pemrograman Berbasis Web', 'Basis Data', 'Struktur Data', 'Jaringan Komputer', 'Kecerdasan Buatan']),
            'sks'      => fake()->numberBetween(1, 4),
            'semester' => fake()->numberBetween(1, 8),
            'dosen_id' => \App\Models\User::inRandomOrder()->first()?->id,
        ];
    }
}