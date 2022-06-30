<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class HomepageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_pages')->insert([
            'header_heading' => 'Smart Video Surveillance Solutions',
            'header_description' => 'We produce all types of devices: video recorders, IP cameras, (including IR and ultrawide-field-of-view cameras) analytical and software modules.',
            'hero_section_video' => 'video-01.mp4',
            'what_we_use_heading' => 'We use only high-Quality brands',
            'about_us_heading' => 'Why RRSTEK: Bring security together',
            'features_heading' => 'Seamless TRASSIR Network integration',
            'features_description' => 'Easily incorporate Protect cameras into a new or existing TRASSIR Network',
            'features_image' => 'home-illustration-Background-Image.jpg',
            'business_heding' => 'Choose Your Business',
            'broadcast_heding' => 'Video Broadcast',

        ]);
    }
}
