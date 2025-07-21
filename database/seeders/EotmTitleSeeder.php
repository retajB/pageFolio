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
        ]);
    }
}