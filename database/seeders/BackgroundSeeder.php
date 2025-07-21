<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BackgroundSeeder extends Seeder
{
    public function run()
    {
        DB::table('backgrounds')->insert([
            [
                'content' => "في تكوين، نؤمن أن كل موهبة هي بذرة تغيير.\nنستقطب العقول اللامعة، نمنحها التدريب الحقيقي، ونضعها في قلب المشاريع التي تصنع الفرق.\n\nتخيل بيئة تعلّم ليست على الورق، بل في الميدان. فريقك، مشروعك، وأثرك يبدأ من هنا.\nفي تكوين، أنت لا تتدرّب فقط أنت تبدأ رحلتك المهنية من أول يوم",
                'image_id' => 13,
                'back_title_id' => 1,
            ],
        ]);
    }
}