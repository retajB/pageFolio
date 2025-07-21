<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'ريم الحربي',
                'email' => 'reem@example.com',
                'national_id' => '1010101010',
                'phone_number' => '0551234567',
                'company_id' => 1,
                'remember_token' => null,
            ],
            [
                'name' => 'خالد الغامدي',
                'email' => 'khaled@example.com',
                'national_id' => '2020202020',
                'phone_number' => '0557654321',
                'company_id' => 1,
                'remember_token' => null,
            ],
        ]);
    }
}