<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class HomePageBusinesses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_page_business_sections')->insert([
            'title' => 'Business',
            'description' => 'onfidence and security without constant control on your part, the stability of all processes in the company - that is what TRASSIR intelligent systems are all about.',
            'image' => 'img-01.jpg',
        ]);
        DB::table('home_page_business_sections')->insert([
            'title' => 'Health Care',
            'description' => 'Protect people’s health in your area with TRASSIR Healthcare Modules!',
            'image' => 'img-02.jpg',
        ]);
        DB::table('home_page_business_sections')->insert([
            'title' => 'Security',
            'description' => 'Intelligent modules for warehouses, sales areas and lands. Protect your business more effectively without raising the number of security guards! Neural network-based systems analyze the data from video cameras, identify dangerous situations and instantly warn on them.',
            'image' => 'img-03.jpg',
        ]);
        DB::table('home_page_business_sections')->insert([
            'title' => 'Work Safety',
            'description' => 'Labor protection systems from TRASSIR are an investment to your reputation!',
            'image' => 'img-04.jpg',
        ]);
    }
}
