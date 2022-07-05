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
            'bg_image' => 'bg-image.png',
            'slug' => 'business',
        ]);

        // Healthcare Page ID=2
        DB::table('page_categories')->insert([
            'name' => 'Healthcare',
            'description' => 'Protect people’s health in your area with RRSTEK Healthcare Modules!',
            'bg_image' => 'bg-image.png',
            'slug' => 'healthcare',
        ]);


        // Security Page ID=3
        DB::table('page_categories')->insert([
            'name' => 'Security',
            'description' => 'Intelligent modules for warehouses, sales areas and lands. Protect your business more effectively without raising the number of security guards! Neural network-based systems analyze the data from video cameras, identify dangerous situations and instantly warn on them.',
            'bg_image' => 'bg-image.png',
            'slug' => 'security',
        ]);


        // Work Safety Page ID=4
        DB::table('page_categories')->insert([
            'name' => 'Work Safety',
            'description' => 'Labor protection systems from TRASSIR are an investment to your reputation!',
            'bg_image' => 'bg-image.png',
            'slug' => 'work-safety',
        ]);
        // Work Safety Page ID=5
        DB::table('page_categories')->insert([
            'name' => 'Industrial',
            'type' => '2'
            'description' => 'Video analytics systems are beneficial for large manufacturing industries and factories. They are efficient to the entire security process. The security system data can be used in a better way to raise labor safety. It also helps to get an emergency response with other systems, including police, fire control and traffic control. Theft and damage of equipment, machine and cargo are prominent all thetime in the industry. To avoid it, video solutions have become a necessity to all manufacturing industries.',
            'bg_image' => 'bg-image.png',
            'slug' => 'industrial',
        ]);









    }
}