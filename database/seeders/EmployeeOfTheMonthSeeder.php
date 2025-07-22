<?php

namespace Database\Seeders;

use App\Models\Employee_of_the_month;
use Illuminate\Database\Seeder;
use App\Models\EmployeeOfTheMonth;
use App\Models\Image;

class EmployeeOfTheMonthSeeder extends Seeder
{
    public function run()
    {
        $employees = [
            // النسخة العربية
            [
                'name' => 'محمد علي الاحمر',
                'content' => 'تميّز هذا الشهر بإشرافه الدقيق على المتدربين...',
                'image_name' => 'صوره الموظف 1',
                'image_url' => 'eotms/صوره الموظف 1.jpg',
                'eotm_title_id' => 1,
            ],
            [
                'name' => 'محمد عدنان القنيوي',
                'content' => 'كعادته، تميّز هذا الشهر بقيادته الهادئة...',
                'image_name' => 'صوره الموظف 2',
                'image_url' => 'eotms/صوره الموظف 2.jpg',
                'eotm_title_id' => 1,
            ],
            [
                'name' => 'يـاسر عبـدالله الغامـدي',
                'content' => 'تميز هذا الشهر بسرعة تعلمه ودقته في التنفيذ...',
                'image_name' => 'صوره الموظف 3',
                'image_url' => 'eotms/صوره الموظف 3.jpg',
                'eotm_title_id' => 1,
            ],

            // النسخة الإنجليزية
            [
                'name' => 'Mohammed Ali Al-Ahmar',
                'content' => 'Stood out this month with his precise supervision of trainees...',
                'image_name' => 'Employee Image 1',
                'image_url' => 'eotms/employee_image_1.jpg',
                'eotm_title_id' => 2,
            ],
            [
                'name' => 'Mohammed Adnan Al-Qunaywi',
                'content' => 'As always, led the team with a calm and effective presence...',
                'image_name' => 'Employee Image 2',
                'image_url' => 'eotms/employee_image_2.jpg',
                'eotm_title_id' => 2,
            ],
            [
                'name' => 'Yasser Abdullah Al-Ghamdi',
                'content' => 'Excelled with rapid learning and precise execution this month...',
                'image_name' => 'Employee Image 3',
                'image_url' => 'eotms/employee_image_3.jpg',
                'eotm_title_id' => 2,
            ],
        ];

        foreach ($employees as $data) {
            $employee = Employee_of_the_month::create([
                'employee_name' => $data['name'],
                'content' => $data['content'],
                'eotm_title_id' => $data['eotm_title_id'],
            ]);

            Image::create([
                'image_name' => $data['image_name'],
                'image_url' => $data['image_url'],
                'employee_of_the_month_id' => $employee->id,
            ]);
        }
    }
}