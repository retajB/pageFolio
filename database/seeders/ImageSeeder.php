<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    public function run()
    {
        DB::table('images')->insert([
            [
                'id' => 1,
                'image_name' => 'صوره الخدمه 1',
                'image_url' => 'services/صوره الخدمه 1.jpg',
            ],
            [
                'id' => 2,
                'image_name' => 'صوره الخدمه 2',
                'image_url' => 'services/صوره الخدمه 2.jpg',
            ],
            [
                'id' => 3,
                'image_name' => 'صوره الخدمه 3',
                'image_url' => 'services/صوره الخدمه 3.jpg',
            ],
            [
                'id' => 4,
                'image_name' => 'صوره الخدمه 4',
                'image_url' => 'services/صوره الخدمه 4.jpg',
            ],
            [
                'id' => 5,
                'image_name' => 'صوره الشريك 1',
                'image_url' => 'partners/صوره الشريك 1.png',
            ],
            [
                'id' => 6,
                'image_name' => 'صوره الشريك 2',
                'image_url' => 'partners/صوره الشريك 2.png',
            ],
            [
                'id' => 7,
                'image_name' => 'صوره الشريك 3',
                'image_url' => 'partners/صوره الشريك 3.png',
            ],
            [
                'id' => 8,
                'image_name' => 'صوره الشريك 4',
                'image_url' => 'partners/صوره الشريك 4.png',
            ],
            [
                'id' => 9,
                'image_name' => 'صوره الموظف 1',
                'image_url' => 'eotms/صوره الموظف 1.jpg',
            ],
            [
                'id' => 10,
                'image_name' => 'صوره الموظف 2',
                'image_url' => 'eotms/صوره الموظف 2.jpg',
            ],
            [
                'id' => 11,
                'image_name' => 'صوره الموظف 3',
                'image_url' => 'eotms/صوره الموظف 3.jpg',
            ],
            [
                'id' => 12,
                'image_name' => 'صوره اللوكيشن تكوين',
                'image_url' => 'locations/صوره اللوكيشن تكوين.jpg',
            ],
            [
                'id' => 13,
                'image_name' => 'خلفية تكوين',
                'image_url' => 'backgrounds/خلفية تكوين.jpg',
            ],
        ]);
    }
}