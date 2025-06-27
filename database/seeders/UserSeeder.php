<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Change to a strong password in production
            'role' => 'Admin',
            'balance' => 0
        ]);

        User::create([
            'name' => 'Regular User',
            'email' => 'user1@example.com',
            'password' => Hash::make('password'),
            'role' => 'User',
            'balance' => 100
        ]);
    }
}
