<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationTitleSeeder extends Seeder
{
    public function run()
    {
        DB::table('location_titles')->insert([
            [
                'section_name' => 'قم بزيارتنا وانضم الينا !',
                'section_id' => 1,
            ],
            [
                'section_name' => 'Visit Us and Be Part of TechWin !',
                'section_id' => 2,
            ],
        ]);
    }
}