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
        User::factory(5)->create();
        User::create([
            'name' => 'Saiful Bahri',
            'email' => 'superuser@gmail.com',
            'email_verified_at'  => now(),
            'role' => 'admin',
            'phone' => '628400876123',
            'bio' => 'flutter dev',
            'password' => Hash::make('123456'),
   ]);

        User::create([
            'name' => 'alfio',
            'email' => 'alfiooatmaja@gmail.com',
            'email_verified_at'  => now(),
            'role' => 'superadmin',
            'phone' => '628400831900',
            'bio' => 'flutter dev',
            'password' => Hash::make('123456'),
   ]);
}
}