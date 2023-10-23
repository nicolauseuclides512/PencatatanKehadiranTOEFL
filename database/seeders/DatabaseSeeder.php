<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'nicolaus',
            'email' => 'nicolaus@ittelkom-pwt.ac.id',
            'password' => 'kur0k0t3t5uy4'
        ]);
        \App\Models\User::factory()->create([
            'name' => 'petrus',
            'email' => 'petrus@ittelkom-pwt.ac.id',
            'password' => 'kur0k0t3t5uy4'
        ]);
    }
}
