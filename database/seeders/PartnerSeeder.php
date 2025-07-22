<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partner;
use App\Models\Image;

class PartnerSeeder extends Seeder
{
    public function run()
    {
        $partners = [
            // النسخة العربية
            ['title_id' => 1, 'image_name' => 'صوره الشريك 1', 'image_url' => 'partners/صوره الشريك 1.png'],
            ['title_id' => 1, 'image_name' => 'صوره الشريك 2', 'image_url' => 'partners/صوره الشريك 2.png'],
            ['title_id' => 1, 'image_name' => 'صوره الشريك 3', 'image_url' => 'partners/صوره الشريك 3.png'],
            ['title_id' => 1, 'image_name' => 'صوره الشريك 4', 'image_url' => 'partners/صوره الشريك 4.png'],

            // النسخة الإنجليزية
            ['title_id' => 2, 'image_name' => 'Partner Image 1', 'image_url' => 'partners/partner_image_1.png'],
            ['title_id' => 2, 'image_name' => 'Partner Image 2', 'image_url' => 'partners/partner_image_2.png'],
            ['title_id' => 2, 'image_name' => 'Partner Image 3', 'image_url' => 'partners/partner_image_3.png'],
            ['title_id' => 2, 'image_name' => 'Partner Image 4', 'image_url' => 'partners/partner_image_4.png'],
        ];

        foreach ($partners as $data) {
            $partner = Partner::create([
                'partner_title_id' => $data['title_id'],
            ]);

            Image::create([
                'image_name' => $data['image_name'],
                'image_url' => $data['image_url'],
                'partner_id' => $partner->id,
            ]);
        }
    }
}