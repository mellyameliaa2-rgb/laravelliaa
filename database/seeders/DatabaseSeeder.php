<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // ADMIN
        User::factory()->create([
            'name' => 'TesAdmin',
            'email' => 'admin@gmail.com',
            'role_id' => 1,
            'password' => bcrypt('123456'),
        ]);

        // USER
        User::factory()->create([
            'name' => 'TesUser',
            'email' => 'user@gmail.com',
            'role_id' => 2,
            'password' => bcrypt('123456'),
        ]);
    }
}