<?php

namespace Database\Seeders;

use App\Models\JenisPeraturan;
use App\Models\Peraturan;
use App\Models\TindakLanjut;
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
        $this->call([
            KelasSeeder::class,
            UserSeeder::class,
            JenisPeraturanSeeder::class,
            PeraturanSeeder::class,
            TindakLanjutSeeder::class,
        ]);
    }
}