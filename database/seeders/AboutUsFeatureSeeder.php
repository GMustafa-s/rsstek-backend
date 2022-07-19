<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AboutUsFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_us_features')->insert([
            'title' => 'A compartible solution customization',
            'description' => 'Support 99,9% of IP-Cameras can be connected by: Navive integratio (manufature protocol) ONVIF RTSP connectivity',
            'image' => 'compatible-solution.svg',
        ]);

        DB::table('about_us_features')->insert([
            'title' => 'Customized',
            'description' => 'Addresses unique challenges by using special rules and Phyton scripts',
            'image' => 'customize-phyton.png',
        ]);

        DB::table('about_us_features')->insert([
            'title' => 'Project Support',
            'description' => 'RRSTEK professionals build complete solutions for your projects',
            'image' => 'project-support.svg',
        ]);

        DB::table('about_us_features')->insert([
            'title' => 'Pre-Sale Demo',
            'description' => 'Our engineers can demonstrate system functions remotly',
            'image' => 'pre-sale-demo.png',
        ]);
        DB::table('about_us_features')->insert([
            'title' => 'Technical Support',
            'description' => 'Agile cutomer serviceand direct response to complaints',
            'image' => 'technical-support.png',
        ]);
        DB::table('about_us_features')->insert([
            'title' => 'Advertising Support',
            'description' => 'Printed and electronic promotional materials are available to the partners',
            'image' => 'Advertising Support.jpg',
        ]);
    }
}
