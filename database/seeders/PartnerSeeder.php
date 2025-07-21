<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    public function run()
    {
        DB::table('partners')->insert([
            [
                'image_id' => 5,
                'partner_title_id' => 1,
            ],
            [
                'image_id' => 6,
                'partner_title_id' => 1,
            ],
            [
                'image_id' => 7,
                'partner_title_id' => 1,
            ],
            [
                'image_id' => 8,
                'partner_title_id' => 1,
            ],
        ]);
    }
}