<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceTitleSeeder extends Seeder
{
    public function run()
    {
        DB::table('service_titles')->insert([
            [
                'section_name' => 'ايش نقدم لكم',
                'section_id' => 1,
            ],
             [
                'section_name' => 'Our services',
                'section_id' =>2 ,
            ],
        ]);
    }
}