<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    public function run()
    {
        DB::table('companies')->insert([
            [
                'name' => 'TechWin | تــكـــويـن',
                'domain' => 'https://cloud.digitalocean.com/projects/543707d0-c4fa-4e74-b322-ca9a0622eaf8/resources?i=b24ed3',
                'slogan' => 'في تَــكْــويــن، إحنا ما نبحث عن المواهب التقنية وبس إحنا نحتضنها، نطوّرها، وندفعها بخطوات واثقة نحو مشاريع حقيقية، وتجارب تصنع فرق، ومستقبل يُكتب باسمك.',
                'logo_url' => 'logos/TechWin | تــكـــويـن.jpg',
                'header_photo' => 'headers/TechWin | تــكـــويـن_header.png',
                'email' => 'techwin@gmail.com',
                'phone_number' => '0501874830',
            ]
        ]);
    }
}