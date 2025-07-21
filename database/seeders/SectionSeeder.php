<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    public function run()
    {
        DB::table('sections')->insert([
            [
                'who_we_are' => true,
                'services' => true,
                'objectives' => true,
                'partners' => true,
                'feedbacks' => true,
                'employee_of_the_months' => true,
                'social_media' => true,
                'locations' => true,
                'page_id' => 1,
            ],
        ]);
    }
}