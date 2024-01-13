<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(20)->create();

        User::create([
            'name' => 'niam',
            'email' => 'niam@mail.com',
            'email_verified_at' => now(),
            'role' => 'superadmin',
            'phone' => '082220301741',
            'bio' => 'laravel developer',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'mujib',
            'email' => 'mujib@mail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'phone' => '081337919926',
            'bio' => 'flutter developer',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'sukri',
            'email' => 'sukri@mail.com',
            'email_verified_at' => now(),
            'role' => 'user',
            'phone' => '081337919926',
            'bio' => 'flutter developer',
            'password' => Hash::make('11223344'),
        ]);
    }
}
