<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IntegrationsPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('integrations')->insert([
            'header_heading' => 'Ecosystem security in your hands',
            'header_description' => 'Designed to integrate with the technology you use daily.',
            'camera_heading' => 'With RRSTEK, you don\'t need to rip and replace.',
            'camera_description' => 'Unlock enhanced flexibility and integrate the systems, tools, and devices your teams use every day to get the most out of the TRASSIR Cloud™ video management system, Ava Cloud Connector',
            'second_camera_heading' => 'Third-party security cameras',
            'control_heading' => 'Access control systems',
            'outputs_heading' => 'Outputs to external systems',
            'management_heading' => 'User management',
            'providers_heading' => 'Identity providers',
            'communication_tools_heading' => 'Instant communication tools',
        ]);
        
        //second camera section seeder
        DB::table('integration_second_camera_sections')->insert([
            'name' => 'ONIV',
            'description' => 'Your ONVIF-conformant IP physical security products integrate with the flexible Aware Cloud VMS',
            'image' => 'camera-onvif',
        ]);
        DB::table('integration_second_camera_sections')->insert([
            'name' => 'VAPIX',
            'description' => 'Connect your existing Axis security cameras with the Aware Cloud VMS to gain proactive insights.',
            'image' => 'camera-vapix',
        ]);
        DB::table('integration_second_camera_sections')->insert([
            'name' => 'Vivotek',
            'description' => 'Connect your existing Vivotek security cameras with the Aware Cloud VMS to gain proactive insights.',
            'image' => 'camera-vivotek',
        ]);

        //control section seeder
        DB::table('integration_control_sections')->insert([
            'name' => 'OpenPath',
            'description' => 'The 360 is a cloud-managed 12MP panoramic camera that secures locations requiring coverage in all directions.',
            'image' => 'camera-onvif',
        ]);
        DB::table('integration_control_sections')->insert([
            'name' => 'VAPIX',
            'description' => 'Connect your existing Axis security cameras with the Aware Cloud VMS to gain proactive insights.',
            'image' => 'camera-vapix',
        ]);
        DB::table('integration_control_sections')->insert([
            'name' => 'Vivotek',
            'description' => 'Connect your existing Vivotek security cameras with the Aware Cloud VMS to gain proactive insights.',
            'image' => 'camera-vivotek',
        ]);

    }
}
