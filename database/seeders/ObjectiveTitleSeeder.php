<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjectiveTitleSeeder extends Seeder
{
    public function run()
    {
        DB::table('objective_titles')->insert([
            [
                'section_name' => 'اهدافنا',
                'section_id' => 1,
            ],
            [
                'section_name' => 'What We Aim For',
                'section_id' => 2,
            ],
             [
                'section_name' => 'اهدافنا',
                'section_id' => 3,
            ],
            [
                'section_name' => 'What We Aim For',
                'section_id' => 4,
            ],
        ]);
    }
}