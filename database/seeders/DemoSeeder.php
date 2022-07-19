<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('demos')->insert([
            'main_heading' => 'Get a demo of your business',
            'main_description' => 'Get a detailed demo of the services based on the example of your business.',

            'demo_section_heading' => 'How to get demo?',

            'security_section_heading' => 'See how TRASSIR products work based on real cases',
            'security_section_description' => 'Online demonstration of capabilities: interface and operation of video analytics modules. Address your questions to a manager and a technical expert and receive detailed information about the devices, software and system configurations.',
             'security_section_image' => 'demo-article-Image.png'
        ]);
        DB::table('demo_sections')->insert([
            'image' => 'demo-Icon(Stroke).png',
            'text' => 'Fill the form bellow'
        ]);
        DB::table('demo_sections')->insert([
            'image' => 'demo-Icon(msgs).png',
            'text' => 'We will get in touch shortly
            and discuss the time'
        ]);
        DB::table('demo_sections')->insert([
            'image' => 'demo-Icon(analysis).png',
            'text' => 'See how RRSTEK can
            improve your business'
        ]);
    }
}
