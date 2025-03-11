<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Jesper',
            'email' => 'jesper@example.com',
            'password' => Hash::make('password123'),
            'role' => 'user',
        ]);
        
        User::create([
            'name' => 'Andy',
            'email' => 'andy@example.com',
            'password' => Hash::make('password123'),
            'role' => 'user',
        ]);
        
        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'password' => Hash::make('password123'),
            'role' => 'user',
        ]);
    }
}