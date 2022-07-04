<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SolutionPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // solution pages
        DB::table('page_categories')->insert([
            'name' => 'hardhat',
            'description' => 'Support 99,9% of IP-Cameras can be connected by: Navive integratio (manufature protocol) ONVIF RTSP connectivity',
            'bg_image' => 'Bg-Image.png',
            'slug' => 'hardhat',
        ]);

        


    }
}
