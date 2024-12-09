<?php

namespace Database\Seeders;

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
            'name' => 'Glassprotectro-adminOne',
            'email' => 'test@example.com',
            'password' => 'adminpassword'
        ]);
        User::factory()->create([
            'name' => 'Glassprotectro-adminTwo',
            'email' => 'test2@example.com',
            'password' => 'adminpassword'
        ]);
    }
}
