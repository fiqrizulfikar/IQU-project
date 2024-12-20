<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;  // Pastikan Anda mengimpor model User

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'fariz hakim',
            'email' => 'farizhakimz7@gmail.com',
            'password' => bcrypt('anjay123'),  // Gunakan password yang aman
            'pin' => '123456',  // Menetapkan PIN
        ]);
    }
}
