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
            'image' => 'camera-onvif.png',
        ]);
        DB::table('integration_second_camera_sections')->insert([
            'name' => 'VAPIX',
            'description' => 'Connect your existing Axis security cameras with the Aware Cloud VMS to gain proactive insights.',
            'image' => 'camera-vapix.png',
        ]);
        DB::table('integration_second_camera_sections')->insert([
            'name' => 'Vivotek',
            'description' => 'Connect your existing Vivotek security cameras with the Aware Cloud VMS to gain proactive insights.',
            'image' => 'camera-vivotek.png',
        ]);

        //control section seeder
        DB::table('integration_control_sections')->insert([
            'name' => 'OpenPath',
            'description' => 'The 360 is a cloud-managed 12MP panoramic camera that secures locations requiring coverage in all directions.',
            'image' => 'img-open-path.png',
        ]);
        DB::table('integration_control_sections')->insert([
            'name' => 'OnGuard Camera',
            'description' => 'Connect your existing Axis security cameras with the Aware Cloud VMS to gain proactive insights.',
            'image' => 'img-lenel.png',
        ]);
        DB::table('integration_control_sections')->insert([
            'name' => 'Keep By Freenics',
            'description' => 'Connect your existing Vivotek security cameras with the Aware Cloud VMS to gain proactive insights.',
            'image' => 'img-feenics.png',
        ]);
        DB::table('integration_control_sections')->insert([
            'name' => 'Nedap',
            'description' => 'Connect your existing Vivotek security cameras with the Aware Cloud VMS to gain proactive insights.',
            'image' => 'img-nedap.png',
        ]);
        DB::table('integration_control_sections')->insert([
            'name' => 'Other Acces Control System',
            'description' => 'Use the openness of the Trassir Generic Access Control API to build your own Access Control Proxy and allow the Cloud VMS to talk to any access control system.',
            'image' => 'img-system.png',
        ]);

        //output section seeder
        DB::table('integration_output_sections')->insert([
            'name' => 'Webhooks',
            'description' => 'Create custom integrations with communication tools to send automatic Cloud VMS notifications.',
            'image' => 'img-webhooks.png',
        ]);
        DB::table('integration_output_sections')->insert([
            'name' => 'API',
            'description' => 'Use Trasssir API to integrate with other systems, automate operations, or export data for further analysis.',
            'image' => 'img-api.png',
        ]);
        DB::table('integration_output_sections')->insert([
            'name' => 'Email',
            'description' => 'Send email alerts to specific users or user groups directly from the Aware Cloud VMS.',
            'image' => 'img-email.png',
        ]);
        DB::table('integration_output_sections')->insert([
            'name' => 'Telegram',
            'description' => 'Send email alerts to specific users or user groups directly from the Cloud VMS.',
            'image' => 'img-telegram.png',
        ]);
        DB::table('integration_output_sections')->insert([
            'name' => 'RTSP',
            'description' => 'View Real Time Streaming Protocol (RTSP) streams from cameras connected to your Trassir Cloud.',
            'image' => 'img-rtsp.png',
        ]);
        DB::table('integration_output_sections')->insert([
            'name' => 'Camera API',
            'description' => 'Use the Aware API to integrate with other systems, automate operations, or export data for further analysis.',
            'image' => 'img-api.png',
        ]);
        //User Management section seeder
        DB::table('integration_management_sections')->insert([
            'name' => 'Active Directory',
            'description' => 'Create and manage users in the Aware Cloud VMS via Microsoft Active Directory Federation Services.',
            'image' => 'img-microsoft.png',
        ]);
        DB::table('integration_management_sections')->insert([
            'name' => 'SAML',
            'description' => 'Configure SAML to enable single sign-on for users.',
            'image' => 'img-saml.png',
        ]);
        //Providers section seeder
        DB::table('integration_provider_sections')->insert([
            'name' => 'Google',
            'image' => 'img-google.png',
        ]);
        DB::table('integration_provider_sections')->insert([
            'name' => 'Azure Active Directory',
            'image' => 'img-azure.png',
        ]);
        //Communination Tools section seeder
        DB::table('integration_communication_tools_sections')->insert([
            'name' => 'Slack',
            'image' => 'img-slack.png',
        ]);
        DB::table('integration_communication_tools_sections')->insert([
            'name' => 'Facebook Workplace',
            'image' => 'img-workplace.png',
        ]);
        DB::table('integration_communication_tools_sections')->insert([
            'name' => 'Webex Teams',
            'image' => 'img-webex.png',
        ]);
        DB::table('integration_communication_tools_sections')->insert([
            'name' => 'Microsoft Teams',
            'image' => 'img-microsoft-team.png',
        ]);

    }
}
