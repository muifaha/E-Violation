<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nisn' => '0000000001',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'info' => true,
            'role' => 2,
        ]);
        User::create([
            'nisn' => '0000000002',
            'name' => 'Lukman Sholeh',
            'email' => '12rpl1@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'info' => true,
            'role' => 1,
        ]);
        User::create([
            'nisn' => '0000000003',
            'name' => 'Reni',
            'email' => '12rpl2@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'info' => true,
            'role' => 1,
        ]);
    }
}