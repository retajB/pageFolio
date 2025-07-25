<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EotmTitleSeeder extends Seeder
{
    public function run()
    {
        DB::table('eotm_titles')->insert([
            [
                'section_name' => 'افرادنــا المتميزيــن',
                'section_id' => 1,
            ],
             [
                'section_name' => 'Stars of TechWin',
                'section_id' => 2,
            ],
             [
                'section_name' => 'افرادنــا المتميزيــن',
                'section_id' => 3,
            ],
             [
                'section_name' => 'Stars of TechWin',
                'section_id' => 4,
            ],
        ]);
    }
}