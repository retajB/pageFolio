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
        ]);
    }
}