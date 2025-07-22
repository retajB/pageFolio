<?php

namespace Database\Seeders;

use App\Models\Company_media_account;
use App\Models\CompanyMediaAccount;
use Illuminate\Database\Seeder;
use App\Models\Icon;

class MediaAccountSeeder extends Seeder
{
    public function run()
    {
        $accounts = [
            // النسخة العربية
            [
                'username_account' => 'https://wa.me/966545021150',
                'section_id' => 1,
                'icon_name' => 'واتس تكوين',
                'icon_url' => 'socialMedia/واتس تكوين.png',
            ],
            [
                'username_account' => 'https://www.linkedin.com/company/tech-win/',
                'section_id' => 1,
                'icon_name' => 'لنكدان تكوين',
                'icon_url' => 'socialMedia/لنكدان تكوين.png',
            ],
            [
                'username_account' => 'https://x.com/techwin_og?s=21&t=zfLK7-3ntaeocCgAGbsFEA',
                'section_id' => 1,
                'icon_name' => 'اكس تكوين',
                'icon_url' => 'socialMedia/اكس تكوين.png',
            ],

            // النسخة الإنجليزية
            [
                'username_account' => 'https://wa.me/966545021150',
                'section_id' => 2,
                'icon_name' => 'TechWin WhatsApp',
                'icon_url' => 'socialMedia/techwin_whatsapp.png',
            ],
            [
                'username_account' => 'https://www.linkedin.com/company/tech-win/',
                'section_id' => 2,
                'icon_name' => 'TechWin LinkedIn',
                'icon_url' => 'socialMedia/techwin_linkedin.png',
            ],
            [
                'username_account' => 'https://x.com/techwin_og?s=21&t=zfLK7-3ntaeocCgAGbsFEA',
                'section_id' => 2,
                'icon_name' => 'TechWin X (Twitter)',
                'icon_url' => 'socialMedia/techwin_x.png',
            ],

             [
                'username_account' => 'https://wa.me/966545021150',
                'section_id' => 3,
                'icon_name' => 'واتس تكوين',
                'icon_url' => 'socialMedia/واتس تكوين.png',
            ],
            [
                'username_account' => 'https://www.linkedin.com/company/tech-win/',
                'section_id' => 3,
                'icon_name' => 'لنكدان تكوين',
                'icon_url' => 'socialMedia/لنكدان تكوين.png',
            ],
            [
                'username_account' => 'https://x.com/techwin_og?s=21&t=zfLK7-3ntaeocCgAGbsFEA',
                'section_id' => 3,
                'icon_name' => 'اكس تكوين',
                'icon_url' => 'socialMedia/اكس تكوين.png',
            ],

            // النسخة الإنجليزية
            [
                'username_account' => 'https://wa.me/966545021150',
                'section_id' => 4,
                'icon_name' => 'TechWin WhatsApp',
                'icon_url' => 'socialMedia/techwin_whatsapp.png',
            ],
            [
                'username_account' => 'https://www.linkedin.com/company/tech-win/',
                'section_id' => 4,
                'icon_name' => 'TechWin LinkedIn',
                'icon_url' => 'socialMedia/techwin_linkedin.png',
            ],
            [
                'username_account' => 'https://x.com/techwin_og?s=21&t=zfLK7-3ntaeocCgAGbsFEA',
                'section_id' => 4,
                'icon_name' => 'TechWin X (Twitter)',
                'icon_url' => 'socialMedia/techwin_x.png',
            ],
        ];

        foreach ($accounts as $data) {
            $account = Company_media_account::create([
                'username_account' => $data['username_account'],
                'section_id' => $data['section_id'],
            ]);

            Icon::create([
                'icon_name' => $data['icon_name'],
                'icon_url' => $data['icon_url'],
                'company_media_account_id' => $account->id,
            ]);
        }
    }
}