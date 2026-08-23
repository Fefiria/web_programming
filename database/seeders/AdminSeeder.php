<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(['email' => 'admin@procom.com'], [
            'id_user' => Str::uuid(),
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@procom.com',
            'password' => Hash::make('admin12345'),
            'phone_number' => '081234567890',
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);
    }
}
