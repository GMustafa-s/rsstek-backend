<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutusPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //about us page all seeder
        //top page heading
        DB::table('aboutus_page_heading')->insert([
            'aboutus_heading' => 'Security and Innovation in a single touch',
        ]);
        // information link section
        DB::table('aboutus_top_info_section')->insert([
            'value_1' => '800+',
            'text_1' => 'Global employees',
            'icon_1' => 'ico-building.svg',

            'value_2' => '2017',
            'text_2' => 'Year founded',
            'icon_2' => 'ico-home.svg',

            'value_3' => '50+',
            'text_3' => 'Partners worldwide',
            'icon_3' => 'ico-users.svg',
        ]);
        // aboutus section
        DB::table('aboutus_section')->insert([
            'our_heading' => 'Who we are',
            'our_description' => 'RRSTEK is a manufacturer of CCTV systems and a video surveillance software developer. All advanced solutions implemented by our company are designed in-house. Our key principle - modern security solutions should be engineered on a deep future-proof concept and wide-spread compatibility between all system components. This allows the selected elements in the RRSTEK system to work with maximum productivity in a timely and cost-effective manner. It’s the essence of RRSTEK CCTV surveillance ecosystem.',
            'our_image' => 'about-us.png',

        ]);
        // ourwork section
        DB::table('aboutus_our_work_section')->insert([
            'our_work_heading' => 'Since 2002, RRSTEK has been developing solutions for CCTV surveillance and security:',

            'sub_heading_1'=> 'Professional CCTV surveillance software',
            'sub_heading_1_icon' => 'ico-pc.svg',

            'sub_heading_2'=> 'Comprehensive partnership policy',
            'sub_heading_2_icon' => 'ico-chart.svg',

            'sub_heading_3'=> 'CCTV cameras and video recorders',
            'sub_heading_3_icon' => 'ico-camera-small.svg',

            'sub_heading_4'=> 'Technical support 24/7',
            'sub_heading_4_icon' => 'ico-vehicle.svg',
        ]);
        // CHIEF EXECUTIVE OFFICER section
        DB::table('aboutus_cheif_officer')->insert([
            'name' => 'Igor Oleynik',
            'about' => 'I’ve always been fascinated by engineering design and technologies. Throughout the years I’ve pursued my inner passion as an opportunity to learn and bring my ideas to life. This became well-suited to the way that the company has had such a strong focus on the desire to drive progress. Thanks to an amazing team of experienced developers, data-obsessed experts and our network of forward-thinking partners we deliver superb results and continue to expand the international footprint of the RRSTEK brand. The mission statement of our company is to play a leading role in providing state-of-the-art security solutions, from the core to the edge.',
            'image' => 'Image.png',
        ]);
        //about our product section
        DB::table('aboutus_about_our_product_section')->insert([
            'heading' => 'The Camera Series Advantge',

            'icon_1' => 'Icon.png',
            'text_1' => 'Easy installation, use, and management',

            'icon_2' => 'Icon-1.png',
            'text_2' => 'AI video and audio analytics',

            'icon_3' => 'Icon-2.png',
            'text_3' => 'Cloud-connected deployment',

            'icon_4' => 'Icon-3.png',
            'text_4' => '10 year warrantly',


        ]);
        //our product info section
        DB::table('aboutus_our_info_section')->insert([

            'value_1' => '19',
            'text_1' => 'Years of experience in CCTV surveillance',
            'icon_1' => 'ico-check.svg',

            'value_2' => '2017',
            'text_2' => 'Countries of RRSTEK installations',
            'icon_2' => 'ico-eye.svg',

            'value_3' => '5000+',
            'text_3' => 'Loyal customers all over the globe',
            'icon_3' => 'ico-men.svg',

            'value_4' => '30%',
            'text_4' => 'Compound annual growth rate',
            'icon_4' => 'ico-graph.svg',


        ]);
        //our customer section
        DB::table('aboutus_our_customer')->insert([
            'heading' => 'Engage Customers Everywhere',
            'image' => 'img-world-map.png',

        ]);


    }
}
