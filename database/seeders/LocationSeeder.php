<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    public function run()
    {
        DB::table('locations')->insert([
            [
                'location_url' => 'https://maps.app.goo.gl/PLZNYnGww7FZhpTG7?g_st=ipc',
                'city_name' => 'مكه المكرمه',
                'content' => 'في تكوين، نؤمن أن كل موهبة تستحق فرصة حقيقية لتثبت نفسها، لذلك أنشأنا نظامًا تدريبيًا عمليًا ومرنًا يجهّزك لسوق العمل من أول تجربة.',
                'image_id' => 12,
                'location_title_id' => 1,
            ],
        ]);
    }
}