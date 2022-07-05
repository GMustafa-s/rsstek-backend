<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // solution sub pages
        DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '1',
            'title' => 'hardhat sub page 1',
            'description' => 'sub page description',
            'fetaured_image' => 'Bg-Image.png',
            'video' => 'video.mp4',
            'slug' => 'hardhat-sub-page-1',
            'meta_name' => 'hardhat sub page 1 meta name',
            'meta_description' => 'hardhat sub page 1 meta description',
        ]);
        // sub pages solutions sections
        DB::table('solution_sections')->insert([
            'solution_sub_pages_id' => '1',
            'title' => 'section 1 title',
            'body' => 'section 1 body',

        ]);
        DB::table('solution_sections')->insert([
            'solution_sub_pages_id' => '1',
            'title' => 'section 1 title',
            'body' => 'section 1 body',

        ]);
        DB::table('solution_sections')->insert([
            'solution_sub_pages_id' => '1',
            'title' => 'section 1 title',
            'body' => 'section 1 body',

        ]);

        DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '1',
            'title' => 'hardhat sub page 12',
            'description' => 'sub page description',
            'fetaured_image' => 'Bg-Image.png',
            'video' => 'video.mp4',
            'slug' => 'hardhat-sub-page-12',
            'meta_name' => 'hardhat sub page 1 meta name',
            'meta_description' => 'hardhat sub page 1 meta description',
        ]);
        // sub pages solutions sections
        DB::table('solution_sections')->insert([
            'solution_sub_pages_id' => '1',
            'title' => 'section 1 title',
            'body' => 'section 1 body',

        ]);
        DB::table('solution_sections')->insert([
            'solution_sub_pages_id' => '1',
            'title' => 'section 1 title',
            'body' => 'section 1 body',

        ]);
        DB::table('solution_sections')->insert([
            'solution_sub_pages_id' => '1',
            'title' => 'section 1 title',
            'body' => 'section 1 body',

        ]);

    }
}
