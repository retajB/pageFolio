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
            
                'image_name' => 'صوره الخدمه 1',
                'image_url' => 'services/صوره الخدمه 1.jpg',
            ],
            [
             
                'image_name' => 'صوره الخدمه 2',
                'image_url' => 'services/صوره الخدمه 2.jpg',
            ],
            [
               
                'image_name' => 'صوره الخدمه 3',
                'image_url' => 'services/صوره الخدمه 3.jpg',
            ],
            [
                
                'image_name' => 'صوره الخدمه 4',
                'image_url' => 'services/صوره الخدمه 4.jpg',
            ],
            [
              
                'image_name' => 'صوره الشريك 1',
                'image_url' => 'partners/صوره الشريك 1.png',
            ],
            [
            
                'image_name' => 'صوره الشريك 2',
                'image_url' => 'partners/صوره الشريك 2.png',
            ],
            [
           
                'image_name' => 'صوره الشريك 3',
                'image_url' => 'partners/صوره الشريك 3.png',
            ],
            [
              
                'image_name' => 'صوره الشريك 4',
                'image_url' => 'partners/صوره الشريك 4.png',
            ],
            [
             
                'image_name' => 'صوره الموظف 1',
                'image_url' => 'eotms/صوره الموظف 1.jpg',
            ],
            [
             
                'image_name' => 'صوره الموظف 2',
                'image_url' => 'eotms/صوره الموظف 2.jpg',
            ],
            [
                
                'image_name' => 'صوره الموظف 3',
                'image_url' => 'eotms/صوره الموظف 3.jpg',
            ],
            [
               
                'image_name' => 'صوره اللوكيشن تكوين',
                'image_url' => 'locations/صوره اللوكيشن تكوين.jpg',
            ],
            [
               
                'image_name' => 'خلفية تكوين',
                'image_url' => 'backgrounds/خلفية تكوين.jpg',
            ],
        ]);
    }
}