<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name'      => 'Admin',
            'email'     => 'adindact@gmail.com',
            'role'      => 'Admin',
            'password'  => bcrypt('laravel123')
        ]);
        $user = User::create([
            'name'      => 'Dosen',
            'email'     => 'dosen@gmail.com',
            'role'      => 'Dosen',
            'password'  => bcrypt('laravel1234')
        ]);
        $user = User::create([
            'name'      => 'Mahasiswa',
            'email'     => 'mahasiswa@gmail.com',
            'role'      => 'Mahasiswa',
            'password'  => bcrypt('laravel12345')
        ]);

    }
}