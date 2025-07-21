<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BackTitleSeeder extends Seeder
{
    public function run()
    {
        DB::table('back_titles')->insert([
            [
                'section_name' => 'مين تــكـــويـن؟',
                'section_id' => 1,
            ],
        ]);
    }
}