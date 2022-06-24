<?php

namespace Database\Seeders;

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
                'meta_name' =>'Home page',
                'meta_description' =>'meta descriptio will be here',
            ],
            [
                'page_title' =>'Contact Us',
                'meta_name' =>'Home page',
                'meta_description' =>'meta descriptio will be here',
            ],
        ];

        foreach($customes as $custom){
            DB::table('custom_pages')->insert($custom);
        }

}

}