<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CameraComparePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('camera_compare_pages')->insert([
            'header_heading'=> 'Find the camera needs for your Smart Video Surveillance',
            'header_description'=> 'Protect your mission with an AI-powered cloud-connected video surveillance camera.',
            'bg_image'=> 'banner-camera.jpg',
            'product_crousal_heading'=> 'Smart Survaillance Video choice for you',
            'table_heading'=> 'Compare Our Product',
            'table_description'=> 'Select up to three models to compare below',
        ]);
    }
}
