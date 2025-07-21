<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeOfTheMonthSeeder extends Seeder
{
    public function run()
    {
        DB::table('employee_of_the_months')->insert([
            [
                'employee_name' => 'محمد علي الاحمر',
                'content' => 'تميّز هذا الشهر بإشرافه الدقيق على المتدربين، وحرصه على توجيههم ومنحهم مهام فعلية حتى أثناء مشاركتهم في مشاريع حقيقية. ساهم بشكل مباشر في رفع كفاءة الفريق وتحقيق نتائج ملموسة.',
                'image_id' => 9,
                'eotm_title_id' => 1,
            ],
            [
                'employee_name' => 'محمد عدنان القنيوي',
                'content' => 'كعادته، تميّز هذا الشهر بقيادته الهادئة وإشرافه الفعّال على المتدربين، حيث ساهم في رفع جودة العمل وتنظيم الفريق حتى أثناء المشاريع الفعلية.',
                'image_id' => 10,
                'eotm_title_id' => 1,
            ],
            [
                'employee_name' => 'يـاسر عبـدالله الغامـدي',
                'content' => 'تميز هذا الشهر بسرعة تعلمه ودقته في تنفيذ المهام التدريبية والمشاريع الواقعية، حيث شارك في أكثر من 10 مشاريع تقنية مختلفة. أظهر فهمًا عميقًا لاحتياجات الفريق والعملاء، وساهم في رفع جودة المخرجات بشكل ملحوظ.',
                'image_id' => 11,
                'eotm_title_id' => 1,
            ],
        ]);
    }
}