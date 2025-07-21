<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackTitleSeeder extends Seeder
{
    public function run()
    {
        DB::table('feedback_titles')->insert([
            [
                'section_name' => 'وش قالوا عن تكوين',
                'feedback_icon' => 'icon-user-green.png',
                'icon_name' => 'يوزر أخضر',
                'section_id' => 1,
            ],
        ]);
    }
}