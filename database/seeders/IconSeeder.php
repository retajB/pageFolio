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
                'id' => 1,
                'icon_name' => 'هدف تكوين1',
                'icon_url' => 'objectives/هدف تكوين1.png',
            ],
            [
                'id' => 2,
                'icon_name' => 'هدف تكوين2',
                'icon_url' => 'objectives/هدف تكوين2.png',
            ],
            [
                'id' => 3,
                'icon_name' => 'هدف تكوين3',
                'icon_url' => 'objectives/هدف تكوين3.png',
            ],
            [
                'id' => 4,
                'icon_name' => 'هدف تكوين4',
                'icon_url' => 'objectives/هدف تكوين4.png',
            ],
            [
                'id' => 5,
                'icon_name' => 'أيقونة X',
                'icon_url' => 'media/x-icon.png',
            ],
            [
                'id' => 6,
                'icon_name' => 'أيقونة LinkedIn',
                'icon_url' => 'media/linkedin-icon.png',
            ],
            [
                'id' => 7,
                'icon_name' => 'أيقونة WhatsApp',
                'icon_url' => 'media/whatsapp-icon.png',
            ],
            [
                'id' => 8,
                'icon_name' => 'يوزر أخضر',
                'icon_url' => 'feedback/icon-user-green.png',
            ],
        ]);
    }
}