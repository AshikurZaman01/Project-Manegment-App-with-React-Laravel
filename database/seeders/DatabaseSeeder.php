<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'id' => 1,
            'name' => 'Ashik',
            'email' => 'ashik@example.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => time()
        ]);

        User::factory()->create([
            'id' => 2,
            'name' => 'John Smith',
            'email' => 'john@example.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => time()
        ]);

        Project::factory()
            ->count(0)
            ->hasTasks(0)
            ->create();
    }
}
