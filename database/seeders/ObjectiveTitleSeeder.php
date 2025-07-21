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
        ]);
    }
}