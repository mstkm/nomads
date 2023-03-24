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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'is_admin' => true,
            'password' => bcrypt('123'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@mail.com',
            'is_admin' => false,
            'password' => bcrypt('321'),
        ]);
    }
}
