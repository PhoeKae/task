<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{

    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin1@example.com',
            'password' => Hash::make('password'),
            'role' => 'Admin',
        ]);
    }
}
