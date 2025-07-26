<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);
    
        // Client user
        User::create([
            'name' => 'Client',
            'email' => 'client@test.com',
            'password' => Hash::make('client123'),
            'role' => 'client',
        ]);
    }
}
