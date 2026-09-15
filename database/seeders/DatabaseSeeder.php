<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;


    
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->count(5)->create();
        $this->call([
            UserSeeder::class,
            MahasiswaSeeder::class,
            MatakuliahSeeder::class,
        ]);
    }
    


    
}
