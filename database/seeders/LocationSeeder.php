<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;
use App\Models\Image;

class LocationSeeder extends Seeder
{
    public function run()
    {
        // النسخة العربية
        $locationAr = Location::create([
            'location_url' => 'https://maps.app.goo.gl/PLZNYnGww7FZhpTG7?g_st=ipc',
            'city_name' => 'مكة المكرمة',
            'content' => 'في تكوين، نؤمن أن كل موهبة تستحق فرصة حقيقية لتثبت نفسها، لذلك أنشأنا نظامًا تدريبيًا عمليًا ومرنًا يجهّزك لسوق العمل من أول تجربة.',
            'location_title_id' => 1,
        ]);

        Image::create([
            'image_name' => 'صوره اللوكيشن تكوين',
            'image_url' => 'locations/صوره اللوكيشن تكوين.jpg',
            'location_id' => $locationAr->id,
        ]);

        // النسخة الإنجليزية
        $locationEn = Location::create([
            'location_url' => 'https://maps.app.goo.gl/PLZNYnGww7FZhpTG7?g_st=ipc',
            'city_name' => 'Makkah',
            'content' => "At TechWin, we believe every talent deserves a real chance to shine. That’s why we built a practical and flexible training system that prepares you for the job market from day one.",
            'location_title_id' => 2,
        ]);

        Image::create([
            'image_name' => 'TechWin Location Image',
            'image_url' => 'locations/techwin_location_image.jpg',
            'location_id' => $locationEn->id,
        ]);

        // النسخة العربية
        $locationAr = Location::create([
            'location_url' => 'https://maps.app.goo.gl/PLZNYnGww7FZhpTG7?g_st=ipc',
            'city_name' => 'مكة المكرمة',
            'content' => 'في تكوين، نؤمن أن كل موهبة تستحق فرصة حقيقية لتثبت نفسها، لذلك أنشأنا نظامًا تدريبيًا عمليًا ومرنًا يجهّزك لسوق العمل من أول تجربة.',
            'location_title_id' => 3,
        ]);

        Image::create([
            'image_name' => 'صوره اللوكيشن تكوين',
            'image_url' => 'locations/صوره اللوكيشن تكوين.jpg',
            'location_id' => $locationAr->id,
        ]);

        // النسخة الإنجليزية
        $locationEn = Location::create([
            'location_url' => 'https://maps.app.goo.gl/PLZNYnGww7FZhpTG7?g_st=ipc',
            'city_name' => 'Makkah',
            'content' => "At TechWin, we believe every talent deserves a real chance to shine. That’s why we built a practical and flexible training system that prepares you for the job market from day one.",
            'location_title_id' => 4,
        ]);

        Image::create([
            'image_name' => 'TechWin Location Image',
            'image_url' => 'locations/techwin_location_image.jpg',
            'location_id' => $locationEn->id,
        ]);
    }
}