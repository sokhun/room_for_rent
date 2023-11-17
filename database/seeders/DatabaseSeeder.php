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
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$12$x8I8T9tf3mnbsPN5VjVuQ.jXuXjKokK4qbB.f3YfCfVzcYCusFxDq', //admin123
        ]);
    }
}
