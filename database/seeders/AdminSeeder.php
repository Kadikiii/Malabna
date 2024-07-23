<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin' ,
            'phone_number' => '0000000000',
            'email' => 'admin@email.com',
            'password' => Hash::make('password'),
            'isAdmin' => 1
        ]);
    }
}
