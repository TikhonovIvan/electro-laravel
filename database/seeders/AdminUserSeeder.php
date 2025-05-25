<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'surname' => 'Main',
            'address' => 'Админская улица, 1',
            'city' => 'Админск',
            'phone' => '+79991234567',
            'postal_code' => '123456',
            'role' => 3, // 3 — админ
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'), // надёжный пароль
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
