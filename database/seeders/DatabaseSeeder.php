<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
    IconSeeder::class,
    ImageSeeder::class,

    CompanySeeder::class,
    UserSeeder::class,

    PageSeeder::class,
    SectionSeeder::class,

    BackTitleSeeder::class,
    ServiceTitleSeeder::class,
    ObjectiveTitleSeeder::class,
    FeedbackTitleSeeder::class,
    EotmTitleSeeder::class,
    LocationTitleSeeder::class,
    PartnerTitleSeeder::class,

    BackgroundSeeder::class,
    ServiceSeeder::class,
    ObjectiveSeeder::class,
    PartnerSeeder::class,
    EmployeeOfTheMonthSeeder::class,
    LocationSeeder::class,
    FeedbackSeeder::class,
    CompanyMediaAccountSeeder::class,
]);
    }
}