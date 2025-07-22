<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
   
    CompanySeeder::class,
    PageSeeder::class,
    SectionSeeder::class,
    UserSeeder::class,

    BackTitleSeeder::class,
    BackgroundSeeder::class,

    ServiceTitleSeeder::class,
    ServiceSeeder::class,

    ObjectiveTitleSeeder::class,
    ObjectiveSeeder::class,

    FeedbackTitleSeeder::class,
    FeedbackSeeder::class,

    EotmTitleSeeder::class,
    EmployeeOfTheMonthSeeder::class,

    LocationTitleSeeder::class,
    LocationSeeder::class,

    PartnerTitleSeeder::class,
    PartnerSeeder::class,

    MediaAccountSeeder::class,

    IconSeeder::class,
 


    
]);
    }
}