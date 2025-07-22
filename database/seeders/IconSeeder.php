<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconSeeder extends Seeder
{
    public function run()
    {
        DB::table('icons')->insert([
            [

                'icon_name' => 'هدف تكوين1',
                'icon_url' => 'objectives/هدف تكوين1.png',
            ],
            [
               
                'icon_name' => 'هدف تكوين2',
                'icon_url' => 'objectives/هدف تكوين2.png',
            ],
            [
              
                'icon_name' => 'هدف تكوين3',
                'icon_url' => 'objectives/هدف تكوين3.png',
            ],
            [
             
                'icon_name' => 'هدف تكوين4',
                'icon_url' => 'objectives/هدف تكوين4.png',
            ],
            [
            
                'icon_name' => 'أيقونة X',
                'icon_url' => 'media/x-icon.png',
            ],
            [
              
                'icon_name' => 'أيقونة LinkedIn',
                'icon_url' => 'media/linkedin-icon.png',
            ],
            [
               
                'icon_name' => 'أيقونة WhatsApp',
                'icon_url' => 'media/whatsapp-icon.png',
            ],
            [
               
                'icon_name' => 'يوزر أخضر',
                'icon_url' => 'feedback/icon-user-green.png',
            ],
        ]);
    }
}