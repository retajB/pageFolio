<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        DB::table('services')->insert([
            [
                'content' => 'برامج تدريب مخصصة حسب احتياجات السوق',
                'image_id' => 1,
                'service_title_id' => 1,
            ],
            [
                'content' => 'احتضان المواهب وإعدادهم لمشاريع حقيقية',
                'image_id' => 2,
                'service_title_id' => 1,
            ],
            [
                'content' => 'تنفيذ مشاريع تقنية عالية الجودة',
                'image_id' => 3,
                'service_title_id' => 1,
            ],
            [
                'content' => 'توفير فرق عمل جاهزة للشركات',
                'image_id' => 4,
                'service_title_id' => 1,
            ],
        ]);
    }
}