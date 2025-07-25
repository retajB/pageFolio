<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    public function run()
    {
        DB::table('pages')->insert([
            [
                'page_name' => 'تكوين اليوم الوطني',
                'theme_color1' => '#013c2c',
                'theme_color2' => '#f5f0e6',
                'text_color1' => '#ffffff',
                'text_color2' => '#dfb458',
                'company_id' => 1,
                'language'=>'ar',
                'layout' => '1',
               
            ],
             [
                'page_name' => 'Techwin national day',
                'theme_color1' => '#013c2c',
                'theme_color2' => '#f5f0e6',
                'text_color1' => '#ffffff',
                'text_color2' => '#dfb458',
                'company_id' => 1,
                'language'=>'en',
                'layout' => '1',
               
            ],
            [
                'page_name' => 'المخطط الثاني اليوم الوطني',
                'theme_color1' => '#013c2c',
                'theme_color2' => '#f5f0e6',
                'text_color1' => '#ffffff',
                'text_color2' => '#dfb458',
                'company_id' => 2,
                'language'=>'ar',
                'layout' => '2',
    
            ],
             [
                'page_name' => 'Techwin national day layout2',
                'theme_color1' => '#013c2c',
                'theme_color2' => '#f5f0e6',
                'text_color1' => '#ffffff',
                'text_color2' => '#dfb458',
                'company_id' => 2,
                'language'=>'en',
                'layout' => '2',
    
            ],
        ]);
    }
}