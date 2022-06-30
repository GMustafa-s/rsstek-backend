<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class HomePageroadcastSection extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_pageroadcast_sections')->insert([
            'cam' => 'Trassir TR-D4111IR1',
            'temperature' => '20°C',
            'location' => ' Location here DSSL',
            'degree' => '100°',
            'image' => 'img-01.jpg',
        ]);
        DB::table('home_pageroadcast_sections')->insert([
            'cam' => 'Trassir TR-D4111IR1',
            'temperature' => '20°C',
            'location' => ' Location here DSSL',
            'degree' => '100°',
            'image' => 'img-01.jpg',
        ]);
        
    }
}
