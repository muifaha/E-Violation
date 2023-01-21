<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use App\Models\WaliKelas;
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
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'info' => true,
            'role' => 1,
        ]);
        User::create([
            'nisn' => '0000000002',
            'name' => 'AsmuIn',
            'email' => '12rpl1@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'info' => true,
            'role' => 2,
        ]);
        User::create([
            'nisn' => '0000000003',
            'name' => 'Lukman Sholeh',
            'email' => '12rpl2@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'info' => true,
            'role' => 2,
        ]);
        User::create([
            'nisn' => '0000000004',
            'name' => 'Mochammad Arsyad',
            'email' => '11rpl1@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'info' => true,
            'role' => 2,
        ]);
        User::create([
            'nisn' => '0000000005',
            'name' => 'Kukuh Widodo',
            'email' => '11rpl2@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'info' => true,
            'role' => 2,
        ]);
        User::create([
            'nisn' => '0000000006',
            'name' => 'Reny Karlinawati',
            'email' => '10rpl1@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'info' => true,
            'role' => 2,
        ]);
        User::create([
            'nisn' => '0000000007',
            'name' => 'Farahma Yuanita',
            'email' => '10rpl2@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'info' => true,
            'role' => 2,
        ]);

        User::create([
            'nisn' => '0043846692',
            'name' => 'Renaldy Naufal',
            'email' => 'ren@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'info' => true,
            'role' => 3,
        ]);

        WaliKelas::create([
            'user_id' => 2,
            'kelas_id' => 1,
            'name' => 'Asmuin'
        ]);

        WaliKelas::create([
            'user_id' => 3,
            'kelas_id' => 2,
            'name' => 'Lukman'
        ]);

        WaliKelas::create([
            'user_id' => 4,
            'kelas_id' => 3,
            'name' => 'Mochammad Arsyad'
        ]);

        WaliKelas::create([
            'user_id' => 5,
            'kelas_id' => 4,
            'name' => 'Kukuh Widodo'
        ]);

        WaliKelas::create([
            'user_id' => 6,
            'kelas_id' => 5,
            'name' => 'Reny Karlinawati'
        ]);

        WaliKelas::create([
            'user_id' => 7,
            'kelas_id' => 6,
            'name' => 'Farahma Yuanita'
        ]);

        Student::create([
            'user_id' => 8,
            'kelas_id' => 2,
            'nama' => 'Renaldy Naufal TA',
            'nisn' => '0043846692',
            'ttl' => 'Surabaya, 2023-01-06',
            'jk' => 'Laki-laki',
            'agama' => 'Islam',
            'alamat' => 'Rungkut',
            'no_telp' => '0823121231',
            'n_ayah' => 'Hendra',
            'n_ibu' => 'Putri',
            'alamat_ortu' => 'Pandugo',
            'no_telp_rumah' => '0281323',
        ]);
    }
}