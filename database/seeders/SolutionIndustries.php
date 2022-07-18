<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SolutionIndustries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('solution_industries')->insert([
        'header_heading' => 'A solution for every business',
        'header_description' => 'Each business is different, and our company creates unique solutions for each of them. Our many years of experience allows us to take every detail into consideration and take an individual approach to effectively solve the problems of our clients.',
        'bg_image' => 'SolutionsBackground.png',
        ]);
    }
}
