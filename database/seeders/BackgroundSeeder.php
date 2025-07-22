<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Background;
use App\Models\Image;

class BackgroundSeeder extends Seeder
{
    public function run()
    {
        // النسخة العربية
        $backgroundAr = Background::create([
            'back_title_id' => 1,
            'content' => "في تكوين، نؤمن أن كل موهبة هي بذرة تغيير.\nنستقطب العقول اللامعة، نمنحها التدريب الحقيقي، ونضعها في قلب المشاريع التي تصنع الفرق.\n\nتخيل بيئة تعلّم ليست على الورق، بل في الميدان. فريقك، مشروعك، وأثرك يبدأ من هنا.\nفي تكوين، أنت لا تتدرّب فقط أنت تبدأ رحلتك المهنية من أول يوم",
        ]);

        Image::create([
            'image_name' => 'خلفية تكوين',
            'image_url' => 'backgrounds/خلفية تكوين.jpg',
            'background_id' => $backgroundAr->id,
        ]);

        // النسخة الإنجليزية
        $backgroundEn = Background::create([
            'back_title_id' => 2,
            'content' => "At Techwin, we believe every talent is a seed of change.\nWe attract brilliant minds, offer hands-on training, and place them at the heart of projects that make a difference.\n\nImagine a learning environment not built on paper, but shaped in the real field. Your team, your project, your impact starts here.\nAt Takween, you're not just training — you're beginning your career from day one.",
        ]);

        Image::create([
            'image_name' => 'Techwin Background',
            'image_url' => 'backgrounds/techwin Background.jpg',
            'background_id' => $backgroundEn->id,
        ]);
    }
}