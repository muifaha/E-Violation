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
            'name' => 'Asmu In',
            'email' => '12rpl1@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'info' => true,
            'role' => 1,
        ]);
        User::create([
            'nisn' => '0000000003',
            'name' => 'Lukman Sholeh',
            'email' => '12rpl2@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'info' => true,
            'role' => 1,
        ]);
        User::create([
            'nisn' => '0000000004',
            'name' => 'Mochammad Arsyad',
            'email' => '11rpl1@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'info' => true,
            'role' => 1,
        ]);
        User::create([
            'nisn' => '0000000005',
            'name' => 'Kukuh Widodo',
            'email' => '11rpl2@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'info' => true,
            'role' => 1,
        ]);
        User::create([
            'nisn' => '0000000006',
            'name' => 'Reny Karlinawati',
            'email' => '10rpl1@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'info' => true,
            'role' => 1,
        ]);
        User::create([
            'nisn' => '0000000007',
            'name' => 'Farahma Yuanita',
            'email' => '10rpl2@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'info' => true,
            'role' => 1,
        ]);
    }
}