<?php

namespace Database\Seeders;

use App\Models\HomeChoiceUsSection;
use App\Models\HomeFeatureSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CustomPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customes = [
            [
                'page_title' =>'Home',
                'meta_name' =>'Home page',
                'meta_description' =>'meta descriptio will be here',
            ],
            [
                'page_title' =>'About Us',
                'meta_name' =>'About us page',
                'meta_description' =>'meta descriptio will be here',
            ],
            [
                'page_title' =>'Contact Us',
                'meta_name' =>'Contact us page',
                'meta_description' =>'meta descriptio will be here',
            ],
            [
                'page_title' =>'Integration',
                'meta_name' =>'Integration page',
                'meta_description' =>'meta descriptio will be here',
            ],
            [
                'page_title' =>'Cases',
                'meta_name' =>'Cases page',
                'meta_description' =>'meta descriptio will be here',
            ],
            [
                'page_title' =>'Demo',
                'meta_name' =>'Demo page',
                'meta_description' =>'meta descriptio will be here',
            ],
        ];

        foreach($customes as $custom){
            DB::table('custom_pages')->insert($custom);
        }
        HomeFeatureSection::create([
            'feature_heading' => 'Seamless TRASSIR Network integration',
            'feature_description' => 'Easily incorporate Protect cameras into a new or existing  TRASSIR Network',
            'feature_image' => 'no image',

        ]);
        HomeChoiceUsSection::create([
            'choice_us_heading' => 'Why RRSTEK: Bring security together',
            'choice_us_sub_heading' => 'A compartible solution customization',
            'choice_us_description' => 'Support 99,9% of IP-Cameras can be connected by: Navive integration (manufature protocol) ONVIF RTSP connectivity',
            'choice_us_image' => 'no image',

        ]);

}

}
