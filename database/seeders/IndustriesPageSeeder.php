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
            'name' => 'health-care',
            'description' => 'The intelligent video analytics in healthcare is a new and effective tool for security purposes. Intelligent video analysis for hospitals is necessary to balance patient’s accessibility with safeguard.
            Healthcare and medical industries face more crime and vulnerability than any other industry. It is essential to use video surveillance along with Intelligent video analytics for hospitals that can notify real-time incidents and improve overall health facilities.',
            'bg_image' => 'HealthcareBackground.png',
            'slug' => 'health-care'
        ]);
        DB::table('industries_pages')->insert([
            'name' => 'Industrial',
            'description' => 'Video analytics systems are beneficial for large manufacturing industries and factories. They are efficient to the entire security process. The security system data can be used in a better way to raise labor safety. It also helps to get an emergency response with other systems, including police, fire control and traffic control. Theft and damage of equipment, machine and cargo are prominent all thetime in the industry. To avoid it, video solutions have become a necessity to all manufacturing industries.',
            'bg_image' => 'IndustrialBackground.png',
            'slug' => 'Industrial'
        ]);
        DB::table('industries_pages')->insert([
            'name' => 'public-safety',
            'description' => 'It is important to stay safe in public places, communities, neighborhoods and other municipal districts. However, it can be challenging for law enforcement to control traffic and monitor other public disturbances not using on-site monitoring.',
            'bg_image' => 'PublicSafety-background.png',
            'slug' => 'public-safety'
        ]);
        DB::table('industries_pages')->insert([
            'name' => 'real-estate',
            'description' => 'Video surveillance and video analytics can optimize management and maintenance of the property, help with identifying and proactively responding to problems, increase predictability and efficiency of the real estat',
            'bg_image' => 'Real-estate-backgroundImg.png',
            'slug' => 'real-estate'
        ]);
        DB::table('industries_pages')->insert([
            'name' => 'retail',
            'description' => 'Video analytics and IP camera technology firstly were adopted in the retail aiming to avoid or lower the losses from shoplifting and fraud. It cause retailers’ huge financial losses, they can be up to 1.42% of all income. A great part of these losses are associated with staff: cashiers, salespeople and others.',
            'bg_image' => 'RetailImage_background.png',
            'slug' => 'retail'
        ]);
        DB::table('industries_pages')->insert([
            'name' => 'transport-and-storage',
            'description' => 'Hundreds of employees move tens of thousands of goods every hour in large warehouses. All processes have to be monitored - from distributing new consignments to storage locations to shipping orders to the customers. Also, employee and customer access to certain areas of the warehouse must be carefully managed.',
            'bg_image' => 'transport_and_storage_background.png',
            'slug' => 'transport-and-storage'
        ]);
    }
}
