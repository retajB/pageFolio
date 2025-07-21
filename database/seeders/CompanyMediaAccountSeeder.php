<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyMediaAccountSeeder extends Seeder
{
    public function run()
    {
        DB::table('company_media_accounts')->insert([
            [
                'username_account' => 'https://x.com/techwin_og?s=21&t=zfLK7-3ntaeocCgAGbsFEA',
                'section_id' => 1,
                'icon_id' => 1, // أيقونة "X"
            ],
            [
                'username_account' => 'https://www.linkedin.com/company/tech-win/',
                'section_id' => 1,
                'icon_id' => 2, // أيقونة "LinkedIn"
            ],
            [
                'username_account' => 'https://wa.me/+966-(545)021150',
                'section_id' => 1,
                'icon_id' => 3, // أيقونة "WhatsApp"
            ],
        ]);
    }
}