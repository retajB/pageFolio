<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Image;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        // النسخة العربية
        $service1 = Service::create([
            'content' => 'برامج تدريب مخصصة حسب احتياجات السوق',
            'service_title_id' => 1,
        ]);

        $service2 = Service::create([
            'content' => 'احتضان المواهب وإعدادهم لمشاريع حقيقية',
            'service_title_id' => 1,
        ]);

        $service3 = Service::create([
            'content' => 'تنفيذ مشاريع تقنية عالية الجودة',
            'service_title_id' => 1,
        ]);

        $service4 = Service::create([
            'content' => 'توفير فرق عمل جاهزة للشركات',
            'service_title_id' => 1,
        ]);

        // النسخة الإنجليزية ة
        $serviceEn1 = Service::create([
            'content' => 'Market-driven training programs tailored to industry needs',
            'service_title_id' => 2,
        ]);

        $serviceEn2 = Service::create([
            'content' => 'Nurturing talent and preparing them for real-world projects',
            'service_title_id' => 2,
        ]);

        $serviceEn3 = Service::create([
            'content' => 'Delivering high-quality tech projects with precision',
            'service_title_id' => 2,
        ]);

        $serviceEn4 = Service::create([
            'content' => 'Providing ready-to-go teams for companies',
            'service_title_id' => 2,
        ]);

        // صور الخدمات العربية
        Image::create([
            'image_name' => 'صوره الخدمة 1',
            'image_url' => 'services/صوره الخدمه 1.jpg',
            'service_id' => $service1->id,
        ]);

        Image::create([
            'image_name' => 'صوره الخدمة 2',
            'image_url' => 'services/صوره الخدمه 2.jpg',
            'service_id' => $service2->id,
        ]);

        Image::create([
            'image_name' => 'صوره الخدمة 3',
            'image_url' => 'services/صوره الخدمه 3.jpg',
            'service_id' => $service3->id,
        ]);

        Image::create([
            'image_name' => 'صوره الخدمة 4',
            'image_url' => 'services/صوره الخدمه 4.jpg',
            'service_id' => $service4->id,
        ]);

        // صور الخدمات الإنجليزية
        Image::create([
            'image_name' => 'Service Image 1',
            'image_url' => 'services/service_image_1.jpg',
            'service_id' => $serviceEn1->id,
        ]);

        Image::create([
            'image_name' => 'Service Image 2',
            'image_url' => 'services/service_image_2.jpg',
            'service_id' => $serviceEn2->id,
        ]);

        Image::create([
            'image_name' => 'Service Image 3',
            'image_url' => 'services/service_image_3.jpg',
            'service_id' => $serviceEn3->id,
        ]);

        Image::create([
            'image_name' => 'Service Image 4',
            'image_url' => 'services/service_image_4.jpg',
            'service_id' => $serviceEn4->id,
        ]);

          $service1 = Service::create([
            'content' => 'برامج تدريب مخصصة حسب احتياجات السوق',
            'service_title_id' => 3,
        ]);

        $service2 = Service::create([
            'content' => 'احتضان المواهب وإعدادهم لمشاريع حقيقية',
            'service_title_id' => 3,
        ]);

        $service3 = Service::create([
            'content' => 'تنفيذ مشاريع تقنية عالية الجودة',
            'service_title_id' => 3,
        ]);

        $service4 = Service::create([
            'content' => 'توفير فرق عمل جاهزة للشركات',
            'service_title_id' => 3,
        ]);

        // النسخة الإنجليزية ة
        $serviceEn1 = Service::create([
            'content' => 'Market-driven training programs tailored to industry needs',
            'service_title_id' => 4,
        ]);

        $serviceEn2 = Service::create([
            'content' => 'Nurturing talent and preparing them for real-world projects',
            'service_title_id' => 4,
        ]);

        $serviceEn3 = Service::create([
            'content' => 'Delivering high-quality tech projects with precision',
            'service_title_id' => 4,
        ]);

        $serviceEn4 = Service::create([
            'content' => 'Providing ready-to-go teams for companies',
            'service_title_id' => 4,
        ]);

        // صور الخدمات العربية
        Image::create([
            'image_name' => 'صوره الخدمة 1',
            'image_url' => 'services/صوره الخدمه 1.jpg',
            'service_id' => $service1->id,
        ]);

        Image::create([
            'image_name' => 'صوره الخدمة 2',
            'image_url' => 'services/صوره الخدمه 2.jpg',
            'service_id' => $service2->id,
        ]);

        Image::create([
            'image_name' => 'صوره الخدمة 3',
            'image_url' => 'services/صوره الخدمه 3.jpg',
            'service_id' => $service3->id,
        ]);

        Image::create([
            'image_name' => 'صوره الخدمة 4',
            'image_url' => 'services/صوره الخدمه 4.jpg',
            'service_id' => $service4->id,
        ]);

        // صور الخدمات الإنجليزية
        Image::create([
            'image_name' => 'Service Image 1',
            'image_url' => 'services/service_image_1.jpg',
            'service_id' => $serviceEn1->id,
        ]);

        Image::create([
            'image_name' => 'Service Image 2',
            'image_url' => 'services/service_image_2.jpg',
            'service_id' => $serviceEn2->id,
        ]);

        Image::create([
            'image_name' => 'Service Image 3',
            'image_url' => 'services/service_image_3.jpg',
            'service_id' => $serviceEn3->id,
        ]);

        Image::create([
            'image_name' => 'Service Image 4',
            'image_url' => 'services/service_image_4.jpg',
            'service_id' => $serviceEn4->id,
        ]);
    }
}