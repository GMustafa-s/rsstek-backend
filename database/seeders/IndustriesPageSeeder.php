<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IndustriesPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('industries_pages')->insert([
            'page_title' => 'Health Care',
            'meta_name' => 'Health Care',
            'meta_description' => 'meta description will be here',
            'header_heading' => 'Health Care',
            'header_description' => 'The intelligent video analytics in healthcare is a new and effective tool for security purposes. Intelligent video analysis for hospitals is necessary to balance patient’s accessibility with safeguard. <br> <br>
            Healthcare and medical industries face more crime and vulnerability than any other industry. It is essential to use video surveillance along with Intelligent video analytics for hospitals that can notify real-time incidents and improve overall health facilities.',
            'bg_image' => 'HealthcareBackground.png',
            'slug' => 'health-care',
            'solution_sub_page_id' => '10,8,9'
        ]);
        DB::table('industries_pages')->insert([
            'page_title' => 'Industrial',
            'meta_name' => 'Industrial',
            'meta_description' => 'meta description will be here',
            'header_heading' => 'Industrial',
            'header_description' => 'Video analytics systems are beneficial for large manufacturing industries and factories. They are efficient to the entire security process. The security system data can be used in a better way to raise labor safety. It also helps to get an emergency response with other systems, including police, fire control and traffic control. Theft and damage of equipment, machine and cargo are prominent all thetime in the industry. To avoid it, video solutions have become a necessity to all manufacturing industries.',
            'bg_image' => 'IndustrialBackground.png',
            'slug' => 'industrial',
            'solution_sub_page_id' => '18,9,7'

        ]);
        DB::table('industries_pages')->insert([
            'page_title' => 'Public Safety',
            'meta_name' => 'Public Safety',
            'meta_description' => 'meta description will be here',
            'header_heading' => 'Public Safety',
            'header_description' => 'It is important to stay safe in public places, communities, neighborhoods and other municipal districts. However, it can be challenging for law enforcement to control traffic and monitor other public disturbances not using on-site monitoring.',
            'bg_image' => 'PublicSafety-background.png',
            'slug' => 'public-safety',
            'solution_sub_page_id' => '17,12'

        ]);
        DB::table('industries_pages')->insert([
            'page_title' => 'Real Estate',
            'meta_name' => 'Real Estate',
            'meta_description' => 'meta description will be here',
            'header_heading' => 'Real Estate',
            'header_description' => 'Video surveillance and video analytics can optimize management and maintenance of the property, help with identifying and proactively responding to problems, increase predictability and efficiency of the real estat',
            'bg_image' => 'Real-estate-backgroundImg.png',
            'slug' => 'real-estate',
            'solution_sub_page_id' => '3,13'

        ]);
        DB::table('industries_pages')->insert([
            'page_title' => 'Retail',
            'meta_name' => 'Retail',
            'meta_description' => 'meta description will be here',
            'header_heading' => 'Retail',
            'header_description' => 'Video analytics and IP camera technology firstly were adopted in the retail aiming to avoid or lower the losses from shoplifting and fraud. It cause retailers’ huge financial losses, they can be up to 1.42% of all income. A great part of these losses are associated with staff: cashiers, salespeople and others.',
            'bg_image' => 'RetailImage_background.png',
            'slug' => 'retail',
            'solution_sub_page_id' => '4,2,5'

        ]);
        DB::table('industries_pages')->insert([
            'page_title' => 'Transport and storage',
            'meta_name' => 'Transport and storage',
            'meta_description' => 'meta description will be here',
            'header_heading' => 'Transport and storage',
            'header_description' => 'Hundreds of employees move tens of thousands of goods every hour in large warehouses. All processes have to be monitored - from distributing new consignments to storage locations to shipping orders to the customers. Also, employee and customer access to certain areas of the warehouse must be carefully managed.',
            'bg_image' => 'transport_and_storage_background.png',
            'slug' => 'transport-and-storage',
            'solution_sub_page_id' => '15'

        ]);
    }
}
