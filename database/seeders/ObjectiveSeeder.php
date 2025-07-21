<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjectiveSeeder extends Seeder
{
    public function run()
    {
        DB::table('objectives')->insert([
            [
                'content' => 'تمكين المواهب المحلية وتحويلهم إلى قادة الغد',
                'objective_title_id' => 1,
                'icon_id' => 1,
            ],
            [
                'content' => 'خلق جسر فعّال بين التعلم الأكاديمي وسوق العمل الحقيقي',
                'objective_title_id' => 1,
                'icon_id' => 2,
            ],
            [
                'content' => 'تحسين جودة تنفيذ المشاريع التقنية عبر فرق مدرّبة ومتمكنة',
                'objective_title_id' => 1,
                'icon_id' => 3,
            ],
            [
                'content' => 'بناء مجتمع مهني مستدام يُلهم ويدعم أفراده',
                'objective_title_id' => 1,
                'icon_id' => 4,
            ],
        ]);
    }
}