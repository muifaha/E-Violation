<?php

namespace Database\Seeders;

use App\Models\RuleType;
use Illuminate\Database\Seeder;

class RuleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RuleType::create([
            'type_name' => 'SIKAP PERILAKU'
        ]);
        RuleType::create([
            'type_name' => 'KERAJINAN'
        ]);
        RuleType::create([
            'type_name' => 'KERAPIAN'
        ]);
        RuleType::create([
            'type_name' => 'TAMBAHAN'
        ]);
    }
}
