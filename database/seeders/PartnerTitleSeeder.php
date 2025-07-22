<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerTitleSeeder extends Seeder
{
    public function run()
    {
        DB::table('partner_titles')->insert([
            [
                'section_name' => 'عمــــــلاء تشرفنــــــا بالعمــــــل معهــــــم',
                'sub_title' => 'يرحب تكوين بكل عملائنا ونحن نفتخر بكوننا جزء منكم',
                'section_id' => 1,
            ],
            [
                'section_name' => 'Clients We Are Honored to Work With',
                'sub_title' => 'Techwin warmly welcomes all our clients — we are proud to be part of your journey.',
                'section_id' => 2,
            ],
              [
                'section_name' => 'عمــــــلاء تشرفنــــــا بالعمــــــل معهــــــم',
                'sub_title' => 'يرحب تكوين بكل عملائنا ونحن نفتخر بكوننا جزء منكم',
                'section_id' => 3,
            ],
            [
                'section_name' => 'Clients We Are Honored to Work With',
                'sub_title' => 'Techwin warmly welcomes all our clients — we are proud to be part of your journey.',
                'section_id' => 4,
            ],
        ]);
    }
}