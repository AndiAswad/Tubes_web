<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::insert([
            [
                'nip' => '202110370311029',
                'pic' => '12345678',
                'nama' => 'Andi Aswad',
                'fakultas' => 'Informatika',
                'profile_img' => 'user_profile.png',
                'role' => 'mahasiswa',
            ], [
                'nip' => '987654321',
                'pic' => '987654321',
                'nama' => 'Teguh',
                'fakultas' => 'Teknik',
                'profile_img' => 'user_profile.png',
                'role' => 'dosen',
            ]
        ]);
    }
}
