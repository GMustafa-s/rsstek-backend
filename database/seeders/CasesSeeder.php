<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cases')->insert([
            'cases_heading' => 'Success stories from our clients',
            'cases_description' => 'We are proud that our customers come back to us: they usually add new objects to our systems; modernize the equipment; add modules. And one of the reasons we are able to sustain such a long partnership is our case-by- case approach to every application.',
            'ourwork_section_heading' => 'See Our Product in Action',
            'image' => 'img-12.jpg',
            'name' => 'Almaty International Airport',
            'location' => 'Almaty Airport Turkey'
        ]);
    }
}
