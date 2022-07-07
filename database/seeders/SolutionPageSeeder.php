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

        // Business Page ID=1
        DB::table('page_categories')->insert([
            'name' => 'Business',
            'description' => 'Confidence and security without constant control on your part, the stability of all processes in the company - that is what RRSTEK intelligent systems are all about.',
            'bg_image' => 'bg-img.jpg',
            'slug' => 'business',
        ]);

        // Healthcare Page ID=2
        DB::table('page_categories')->insert([
            'name' => 'Healthcare',
            'description' => 'Protect people’s health in your area with RRSTEK Healthcare Modules!',
            'bg_image' => 'bg-img.png',
            'slug' => 'healthcare',
        ]);


        // Security Page ID=3
        DB::table('page_categories')->insert([
            'name' => 'Security',
            'description' => 'Intelligent modules for warehouses, sales areas and lands. Protect your business more effectively without raising the number of security guards! Neural network-based systems analyze the data from video cameras, identify dangerous situations and instantly warn on them.',
            'bg_image' => 'bg-img.jpg',
            'slug' => 'security',
        ]);


        // Work Safety Page ID=4
        DB::table('page_categories')->insert([
            'name' => 'Work Safety',
            'description' => 'Labor protection systems from TRASSIR are an investment to your reputation!',
            'bg_image' => 'bg-img.png',
            'slug' => 'work-safety',
        ]);








    }
}