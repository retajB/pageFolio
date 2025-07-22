<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Objective;
use App\Models\Icon;

class ObjectiveSeeder extends Seeder
{
    public function run()
    {
        // الأهداف باللغة العربية
        $objectivesAr = [
            [
                'content' => 'تمكين المواهب المحلية وتحويلهم إلى قادة الغد',
                'icon_name' => 'قائد الغد',
                'icon_url' => 'objectives/هدف تكوين1.png',
            ],
            [
                'content' => 'خلق جسر فعّال بين التعلم الأكاديمي وسوق العمل الحقيقي',
                'icon_name' => 'جسر التعلم',
                'icon_url' => 'objectives/هدف تكوين2.png',
            ],
            [
                'content' => 'تحسين جودة تنفيذ المشاريع التقنية عبر فرق مدرّبة ومتمكنة',
                'icon_name' => 'مشاريع تقنية',
                'icon_url' => 'objectives/هدف تكوين3.png',
            ],
            [
                'content' => 'بناء مجتمع مهني مستدام يُلهم ويدعم أفراده',
                'icon_name' => 'مجتمع مهني',
                'icon_url' => 'objectives/هدف تكوين4.png',
            ],
        ];

        foreach ($objectivesAr as $data) {
            $objective = Objective::create([
                'content' => $data['content'],
                'objective_title_id' => 1,
            ]);

            Icon::create([
                'icon_name' => $data['icon_name'],
                'icon_url' => $data['icon_url'],
                'objective_id' => $objective->id,
            ]);
        }

        // الأهداف باللغة الإنجليزية
        $objectivesEn = [
            [
                'content' => 'Empowering local talent to become tomorrow’s leaders',
                'icon_name' => 'Future Leader',
                'icon_url' => 'objectives/Techwin_objective1.png',
            ],
            [
                'content' => 'Creating an effective bridge between academic learning and the real job market',
                'icon_name' => 'Learning Bridge',
                'icon_url' => 'objectives/Techwin_objective2.png',
            ],
            [
                'content' => 'Enhancing project quality through skilled and trained tech teams',
                'icon_name' => 'Tech Projects',
                'icon_url' => 'objectives/Techwin_objective3.png',
            ],
            [
                'content' => 'Building a sustainable professional community that inspires and supports',
                'icon_name' => 'Professional Community',
                'icon_url' => 'objectives/Techwin_objective4.png',
            ],
        ];

        foreach ($objectivesEn as $data) {
            $objective = Objective::create([
                'content' => $data['content'],
                'objective_title_id' => 2, // النسخة الإنجليزية
            ]);

            Icon::create([
                'icon_name' => $data['icon_name'],
                'icon_url' => $data['icon_url'],
                'objective_id' => $objective->id,
            ]);
        }

        // الأهداف باللغة العربية
        $objectivesAr = [
            [
                'content' => 'تمكين المواهب المحلية وتحويلهم إلى قادة الغد',
                'icon_name' => 'قائد الغد',
                'icon_url' => 'objectives/هدف تكوين1.png',
            ],
            [
                'content' => 'خلق جسر فعّال بين التعلم الأكاديمي وسوق العمل الحقيقي',
                'icon_name' => 'جسر التعلم',
                'icon_url' => 'objectives/هدف تكوين2.png',
            ],
            [
                'content' => 'تحسين جودة تنفيذ المشاريع التقنية عبر فرق مدرّبة ومتمكنة',
                'icon_name' => 'مشاريع تقنية',
                'icon_url' => 'objectives/هدف تكوين3.png',
            ],
            [
                'content' => 'بناء مجتمع مهني مستدام يُلهم ويدعم أفراده',
                'icon_name' => 'مجتمع مهني',
                'icon_url' => 'objectives/هدف تكوين4.png',
            ],
        ];

        foreach ($objectivesAr as $data) {
            $objective = Objective::create([
                'content' => $data['content'],
                'objective_title_id' => 3,
            ]);

            Icon::create([
                'icon_name' => $data['icon_name'],
                'icon_url' => $data['icon_url'],
                'objective_id' => $objective->id,
            ]);
        }

        // الأهداف باللغة الإنجليزية
        $objectivesEn = [
            [
                'content' => 'Empowering local talent to become tomorrow’s leaders',
                'icon_name' => 'Future Leader',
                'icon_url' => 'objectives/Techwin_objective1.png',
            ],
            [
                'content' => 'Creating an effective bridge between academic learning and the real job market',
                'icon_name' => 'Learning Bridge',
                'icon_url' => 'objectives/Techwin_objective2.png',
            ],
            [
                'content' => 'Enhancing project quality through skilled and trained tech teams',
                'icon_name' => 'Tech Projects',
                'icon_url' => 'objectives/Techwin_objective3.png',
            ],
            [
                'content' => 'Building a sustainable professional community that inspires and supports',
                'icon_name' => 'Professional Community',
                'icon_url' => 'objectives/Techwin_objective4.png',
            ],
        ];

        foreach ($objectivesEn as $data) {
            $objective = Objective::create([
                'content' => $data['content'],
                'objective_title_id' => 4, // النسخة الإنجليزية
            ]);

            Icon::create([
                'icon_name' => $data['icon_name'],
                'icon_url' => $data['icon_url'],
                'objective_id' => $objective->id,
            ]);
        }
    }
}