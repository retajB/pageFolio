<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    public function run()
    {
    
    
Company::create(
    [
        'name' => 'تــكـــويـن',
        'domain' => 'https://cloud.digitalocean.com/projects/543707d0-c4fa-4e74-b322-ca9a0622eaf8/resources?i=b24ed3',
        'slogan' => 'في تَــكْــويــن، إحنا ما نبحث عن المواهب التقنية وبس إحنا نحتضنها، نطوّرها، وندفعها بخطوات واثقة نحو مشاريع حقيقية، وتجارب تصنع فرق، ومستقبل يُكتب باسمك.',
        'logo_url' => 'logos/تكوين_international.jpg',
        'header_photo' => 'headers/تكوين_header.png',
        'email' => 'techwin@gmail.com',
        'phone_number' => '0501874830',
    ],
    );


  Company::create(  [
        'name' => 'TechWin International',
        'domain' => 'https://cloud.digitalocean.com/projects/543707d0-c4fa-4e74-b322-ca9a0622eaf8/resources?i=b24ed3',
        'slogan' => "At TechWin, we don't just seek technical talent — we embrace it, nurture it, and push it forward with confidence into real projects, transformative experiences, and a future authored by you.",
        'logo_url' => 'logos/تكوين_international.jpg',
        'header_photo' => 'headers/تكوين_header.png',
        'email' => 'techwin2@gmail.com',
        'phone_number' => '0501874830',
    ],
    
);


        // ];

        // foreach ($companies as $data) {
        //     Company::create($data);
        // }
    }
}