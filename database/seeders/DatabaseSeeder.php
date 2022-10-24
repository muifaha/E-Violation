<?php

namespace Database\Seeders;

use App\Models\Rule;
use App\Models\User;
use App\Models\Kelas;
use App\Models\RuleType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
        User::create([
            'nisn' => '1',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'info' => true,
            'is_admin' => true,
        ]);

        RuleType::create([
            'type_name' => 'SIKAP PERILAKU'
        ]);
        RuleType::create([
            'type_name' => 'KERAJINAN'
        ]);

        Rule::create([
            'name' => 'Melindungi teman yang bermasalah',
            'poin' => 15,
            'rule_type_id' => 1
        ]);

        Rule::create([
            'name' => 'Datang Terlambat',
            'poin' => 10,
            'rule_type_id' => 2
        ]);

        Rule::create([
            'name' => 'Di kantin saat jam pembelajaran',
            'poin' => 10,
            'rule_type_id' => 2
        ]);

        Rule::create([
            'name' => 'Tidak mengikuti upacara',
            'poin' => 20,
            'rule_type_id' => 2

        ]);

        Kelas::create([
            'nama_kelas' => '12 RPL 1'
        ]);
        Kelas::create([
            'nama_kelas' => '12 RPL 2'
        ]);
        Kelas::create([
            'nama_kelas' => '11 RPL 1'
        ]);
        Kelas::create([
            'nama_kelas' => '11 RPL 2'
        ]);
        Kelas::create([
            'nama_kelas' => '10 RPL 1'
        ]);
        Kelas::create([
            'nama_kelas' => '10 RPL 2'
        ]);
    }
}