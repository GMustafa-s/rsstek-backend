<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CameraPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
        
        
        // Camera Page "TR-D2183ZIR6 v2 2.7-13.5" & ID=1
        // main table
        DB::table('cameras')->insert([
            'title' => 'TR-D2183ZIR6 v2 2.7-13.5',
            'sub_title' => 'Outdoor IP camera with IR illumination',
            'meta_name' => 'TR-D2183ZIR6 v2 2.7-13.5',
            'meta_description' => '<ul style="margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgba(51, 51, 51, 0.8);"><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">8 MP (3840 × 2160) IP-camera is adapted for outdoor use regardless of the season: protection of the case against moisture and dust meets the requirements of the IP67 standard, operating temperatures - –40 ° C ... +60 ° C, lightning protection - TVS 2000 V ( high voltage suppressor up to 2000 V). Suitable for night surveillance - equipped with IR illumination with a range of 60 m.<br></li></ul>',
            'image' => 'TR-D2183ZIR6 v2 2.7-13.5.png',
            'slug' => 'tr-d2183ZIR6-v2-2.7-13.5',
            'description' => '<ul style="margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgba(51, 51, 51, 0.8);"><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">8 MP (3840 × 2160) IP-camera is adapted for outdoor use regardless of the season: protection of the case against moisture and dust meets the requirements of the IP67 standard, operating temperatures - –40 ° C ... +60 ° C, lightning protection - TVS 2000 V ( high voltage suppressor up to 2000 V). Suitable for night surveillance - equipped with IR illumination with a range of 60 m.<br></li></ul>',
            
        ]);
        // Camera pages sections
        DB::table('camera_sections')->insert([
            'camera_id' => '1',
            'title' => 'Functionality:',
            'description' => '<ul style="margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgba(51, 51, 51, 0.8);"><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Detection of people.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Motion detection software.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Control of the area.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Finding abandoned items.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Virtual line crossing detection, cross statistics.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">WDR 120 dB - neutralizes the effect of different-contrast lighting on the image quality.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">3D DNR - Noise Reduction.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Shooting in vertically oriented resolution (2160 × 3840).</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Defog - increasing the contrast to eliminate the effect of fog and smoke.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">ROI - fixing on the selected area and simultaneously reducing the resolution in the rest of the frame to optimize the bitrate.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">BLC - Backlight Compensation.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Day / night mode with ICR, with sufficient illumination to refract infrared rays.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Broadcast speed: 8 MP - 15 fps.</li></ul>',
            
        ]);

        // Camera pages sections
        DB::table('camera_sections')->insert([
            'camera_id' => '1',
            'title' => 'BASICS',
            'description' => '<ul style="margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgba(51, 51, 51, 0.8);"><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Power supply - DC 12 V, PoE. The maximum power consumption is 13 W. Dimensions - Ø74.5 × 215.8 mm. Weight - 726 g.<br></li></ul>',
            
        ]);


        // Camera pages specifications
        DB::table('camera_specifications')->insert([
            'camera_id' => '1',
            'wdr' =>'WDR (120 dB)',
            'max_resoluton' =>'3840x2160',
            'resoluton' =>'',
            'sensor' =>'1/2.7" CMOS',
            'bitrate' =>'10',
            'power_supply' =>'DC 12 V, PoE',
            'lens' =>'2.7-13.5',
            'weight' =>'0.726',
            'senstivity' =>'0,003',
            'ingress_protection' =>'IP67',
            'dimensions' =>'Ø74.5x215.8',
            'power_consumption' =>'13',
            'temprature' =>'-40…+60',
            'mode' =>'Mechanic IR-filter',
            'network_interface' =>'RJ-45',
            'ir_range' =>'',
            'focal_length' =>'',
            'horizontal_fov' =>'',
            'aperture' =>'',
            'zoom_focus' =>'',
            'colors' =>'',
            'retention' =>'',
            'aspect_ratio' =>'',
            'audio_analytics' =>'',
            
        ]);
       



        // Camera Page "TR-D2181IR3 v2 2.8" & ID=2
        // main table
        DB::table('cameras')->insert([
            'title' => 'TR-D2181IR3 v2 2.8',
            'sub_title' => 'Outdoor IP camera with IR illumination',
            'meta_name' => 'TRASSIR TR-D2181IR3 v2 (2.8 mm)',
            'meta_description' => '<p><span style="color: rgba(51, 51, 51, 0.8); font-family: Poppins, sans-serif; font-size: 16px;">8 MP (3840 × 2160) IP-camera is designed taking into account the conditions of round-the-clock year-round outdoor operation: the metal case is protected from moisture and dust according to the IP67 standard, operating temperatures - –40 ° C ... +60 ° C, lightning protection - TVS 2000 V, range integrated lighting action - 35 m.</span><br></p>',
            'image' => 'TR-D2181IR3 v2 2.8.png',
            'slug' => 'tr-d2181IR3-v2-2.8',
            'description' => '<p><span style="color: rgba(51, 51, 51, 0.8); font-family: Poppins, sans-serif; font-size: 16px;">8 MP (3840 × 2160) IP-camera is designed taking into account the conditions of round-the-clock year-round outdoor operation: the metal case is protected from moisture and dust according to the IP67 standard, operating temperatures - –40 ° C ... +60 ° C, lightning protection - TVS 2000 V, range integrated lighting action - 35 m.</span><br></p>',
            
        ]);
        // Camera pages sections
        DB::table('camera_sections')->insert([
            'camera_id' => '2',
            'title' => 'Functionality:',
            'description' => '<p><br></p><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; position: relative; color: rgba(51, 51, 51, 0.8);">Built-in microphone.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; position: relative; color: rgba(51, 51, 51, 0.8);">Detection of people.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; position: relative; color: rgba(51, 51, 51, 0.8);">Motion detection.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; position: relative; color: rgba(51, 51, 51, 0.8);">Control of the area.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; position: relative; color: rgba(51, 51, 51, 0.8);">Finding abandoned items.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; position: relative; color: rgba(51, 51, 51, 0.8);">Virtual line crossing detection, crossing statistics.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; position: relative; color: rgba(51, 51, 51, 0.8);">WDR 120 dB - neutralizes the effect of changes in the level of illumination on the image quality.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; position: relative; color: rgba(51, 51, 51, 0.8);">3D DNR - spatial noise reduction.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; position: relative; color: rgba(51, 51, 51, 0.8);">Corridor mode - vertical resolution shooting with an aspect ratio of 9:16.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; position: relative; color: rgba(51, 51, 51, 0.8);">Defog - increase the contrast to minimize the effect of fog and smoke.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; position: relative; color: rgba(51, 51, 51, 0.8);">ROI - fixing on the selected area and parallel reducing the resolution in the rest of the frame to optimize the bit rate.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; position: relative; color: rgba(51, 51, 51, 0.8);">BLC - Backlight Compensation.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; position: relative; color: rgba(51, 51, 51, 0.8);">Day / night mode with ICR, with sufficient illumination to block infrared rays to normalize color reproduction.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; position: relative; color: rgba(51, 51, 51, 0.8);">Compression with H.265 +, H.264 +, H.265, H.264 codecs.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; position: relative; color: rgba(51, 51, 51, 0.8);">Stream broadcasting speed with a resolution of 8 Mp - 15 fps.</li>',
            
        ]);

        // Camera pages sections
        DB::table('camera_sections')->insert([
            'camera_id' => '2',
            'title' => 'BASICS',
            'description' => '<p><span style="color: rgba(51, 51, 51, 0.8); font-family: Poppins, sans-serif; font-size: 16px;">TR-D2181IR3 v2 (3.6 mm) is equipped with a 3.6 mm fixed focal length lens, 91 ° horizontal field of view, 46 ° vertical field, F / 1.8 aperture. Equipped with an RJ-45 network port, a microSD slot with a capacity of up to 128 GB, a power connector. Power Supply - 12V DC or PoE. The maximum power consumption is 13 W. Dimensions - 165.3 × 64.8 × 64.8 mm. Weight - 364 g.</span><br></p>',
            
        ]);


        // Camera pages specifications
        DB::table('camera_specifications')->insert([
            'camera_id' => '2',
            'wdr' =>'WDR (120 dB)',
            'max_resoluton' =>'3840x2160',
            'resoluton' =>'',
            'sensor' =>'1/2.7" CMOS',
            'bitrate' =>'10',
            'power_supply' =>'DC 12 V, PoE',
            'lens' =>'2.8',
            'weight' =>'0.364',
            'senstivity' =>'0,005',
            'ingress_protection' =>'IP67',
            'dimensions' =>'64.8x64.8x165.3',
            'power_consumption' =>'13',
            'temprature' =>'-40…+60',
            'mode' =>'Mechanic IR-filter',
            'network_interface' =>'RJ-45',
            'ir_range' =>'',
            'focal_length' =>'',
            'horizontal_fov' =>'',
            'aperture' =>'',
            'zoom_focus' =>'',
            'colors' =>'',
            'retention' =>'',
            'aspect_ratio' =>'',
            'audio_analytics' =>'',
            
        ]);





        // Camera Page "TR-D2181IR3 v2 3.6" & ID=3
        // main table
        DB::table('cameras')->insert([
            'title' => 'TR-D2181IR3 v2 3.6',
            'sub_title' => 'Outdoor IP camera with IR illumination',
            'meta_name' => 'TRASSIR TR-D2181IR3 v2 (3.6 mm)',
            'meta_description' => '<p><span style="color: rgba(51, 51, 51, 0.8); font-family: Poppins, sans-serif; font-size: 16px;">8 MP (3840 × 2160) IP-camera is designed taking into account the conditions of round-the-clock year-round outdoor operation: the metal case is protected from moisture and dust according to the IP67 standard, operating temperatures - –40 ° C ... +60 ° C, lightning protection - TVS 2000 V, range integrated lighting action - 35 m.</span><br></p>',
            'image' => 'TR-D2181IR3 v2 3.6.png',
            'slug' => 'tr-d2181IR3-v2-3.6',
            'description' => '<p><span style="color: rgba(51, 51, 51, 0.8); font-family: Poppins, sans-serif; font-size: 16px;">8 MP (3840 × 2160) IP-camera is designed taking into account the conditions of round-the-clock year-round outdoor operation: the metal case is protected from moisture and dust according to the IP67 standard, operating temperatures - –40 ° C ... +60 ° C, lightning protection - TVS 2000 V, range integrated lighting action - 35 m.</span><br></p>',
            
        ]);
        // Camera pages sections
        DB::table('camera_sections')->insert([
            'camera_id' => '3',
            'title' => 'Functionality:',
            'description' => '<ul style="margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgba(51, 51, 51, 0.8);"><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Built-in microphone.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Detection of people.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Motion detection.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Control of the area.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Finding abandoned items.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Virtual line crossing detection, crossing statistics.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">WDR 120 dB - neutralizes the effect of changes in the level of illumination on the image quality.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">3D DNR - spatial noise reduction.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Corridor mode - vertical resolution shooting with an aspect ratio of 9:16.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Defog - increase the contrast to minimize the effect of fog and smoke.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">ROI - fixing on the selected area and parallel reducing the resolution in the rest of the frame to optimize the bit rate.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">BLC - Backlight Compensation.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Day / night mode with ICR, with sufficient illumination to block infrared rays to normalize color reproduction.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Compression with H.265 +, H.264 +, H.265, H.264 codecs.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Stream broadcasting speed with a resolution of 8 Mp - 15 fps.</li></ul>',
            
        ]);

        // Camera pages sections
        DB::table('camera_sections')->insert([
            'camera_id' => '3',
            'title' => 'BASICS',
            'description' => '<ul style="margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgba(51, 51, 51, 0.8);"><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">TR-D2181IR3 v2 (3.6 mm) is equipped with a 3.6 mm fixed focal length lens, 91 ° horizontal field of view, 46 ° vertical field, F / 1.8 aperture. Equipped with an RJ-45 network port, a microSD slot with a capacity of up to 128 GB, a power connector. Power Supply - 12V DC or PoE. The maximum power consumption is 13 W. Dimensions - 165.3 × 64.8 × 64.8 mm. Weight - 364 g.<br></li></ul>',
            
        ]);


        // Camera pages specifications
        DB::table('camera_specifications')->insert([
            'camera_id' => '3',
            'wdr' =>'WDR (120 dB)',
            'max_resoluton' =>'3840x2160',
            'resoluton' =>'',
            'sensor' =>'1/2.7" CMOS',
            'bitrate' =>'10',
            'power_supply' =>'DC 12 V, PoE',
            'lens' =>'3.6',
            'weight' =>'0.364',
            'senstivity' =>'0,005',
            'ingress_protection' =>'IP67',
            'dimensions' =>'64.8x64.8x165.3',
            'power_consumption' =>'13',
            'temprature' =>'RJ-45',
            'mode' =>'Mechanic IR-filter',
            'network_interface' =>'RJ-45',
            'ir_range' =>'',
            'focal_length' =>'',
            'horizontal_fov' =>'',
            'aperture' =>'',
            'zoom_focus' =>'',
            'colors' =>'',
            'retention' =>'',
            'aspect_ratio' =>'',
            'audio_analytics' =>'',
            
        ]);
       


                        // Camera Page "name" & ID=4
        // main table
        DB::table('cameras')->insert([
            'title' => 'TR-D2183IR6 v2 2.7-13.5',
            'sub_title' => 'Outdoor IP camera with IR illumination',
            'meta_name' => 'TRASSIR TR-D2183IR6 v2 2.7-13.5',
            'meta_description' => '<ul style="margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgba(51, 51, 51, 0.8);"><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">8 MP (3840 × 2160) IP-camera is designed taking into account the conditions of round-the-clock year-round outdoor operation: the metal case is protected from moisture and dust according to the IP67 standard, operating temperatures - –40 ° C ... +60 ° C, lightning protection - TVS 2000 V, range integrated lighting action - 35 m.<br></li></ul>',
            'image' => 'TR-D2183IR6 v2 2.7-13.5.png',
            'slug' => 'tr-d2183IR6-v2-2.7-13.5',
            'description' => '<ul style="margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgba(51, 51, 51, 0.8);"><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">8 MP (3840 × 2160) IP-camera is designed taking into account the conditions of round-the-clock year-round outdoor operation: the metal case is protected from moisture and dust according to the IP67 standard, operating temperatures - –40 ° C ... +60 ° C, lightning protection - TVS 2000 V, range integrated lighting action - 35 m.<br></li></ul>',
            
        ]);
        // Camera pages sections
        DB::table('camera_sections')->insert([
            'camera_id' => '4',
            'title' => 'Functionality:',
            'description' => '<ul style="margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgba(51, 51, 51, 0.8);"><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Detection of people.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Motion detection software.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Control of the area.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Finding abandoned items.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Virtual line crossing detection, crossing statistics.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">WDR 120 dB - neutralizes the effect of different-contrast lighting on the image quality.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">3D DNR - Noise Reduction.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Shooting in vertically oriented resolution (2160 × 3840).</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Defog - increasing the contrast to eliminate the effect of fog and smoke.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">ROI - fixing on the selected area and simultaneously reducing the resolution in the rest of the frame to optimize the bitrate.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">BLC - Backlight Compensation.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Day / night mode with ICR, with sufficient illumination to refract infrared rays.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Broadcast speed: 8 MP - 15 fps.</li></ul>',
            
        ]);

        // Camera pages sections
        DB::table('camera_sections')->insert([
            'camera_id' => '4',
            'title' => 'BASICS',
            'description' => '<ul style="margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgba(51, 51, 51, 0.8);"><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">TR-D2183IR6 v2 is equipped with a 2.7 ~ 13.5 mm zoom lens, 113 ° ~ 31 ° horizontal field of view, 58 ° ~ 17 ° vertical field, F / 1.3 aperture. To organize two-way audio communication with the installation site of the camera, there are audio input, audio output and built-in microphone, connection of an additional sensor and communication with a PTZ camera - alarm input and alarm output, compression - H.265 +, H.264 +, H.265, H. 264, network connection - RJ-45 port, internal archive formation - microSD slot up to 128 GB. Power supply - DC 12 V, PoE. The maximum power consumption is 13 W. Dimensions - Ø74.5 × 215.8 mm. Weight - 726 g.<br></li></ul>',
            
        ]);


        // Camera pages specifications
        DB::table('camera_specifications')->insert([
            'camera_id' => '4',
            'wdr' =>'WDR (120 dB)',
            'max_resoluton' =>'3840x2160',
            'resoluton' =>'',
            'sensor' =>'1/2.7" CMOS',
            'bitrate' =>'10',
            'power_supply' =>'DC 12 V, PoE',
            'lens' =>'2.7- 13.5',
            'weight' =>'0.726',
            'senstivity' =>'0,003',
            'ingress_protection' =>'IP67',
            'dimensions' =>'Ø74.5x215.8',
            'power_consumption' =>'13',
            'temprature' =>'-40…+60',
            'mode' =>'Mechanic IR-filter',
            'network_interface' =>'RJ-45',
            'ir_range' =>'',
            'focal_length' =>'',
            'horizontal_fov' =>'',
            'aperture' =>'',
            'zoom_focus' =>'',
            'colors' =>'',
            'retention' =>'',
            'aspect_ratio' =>'',
            'audio_analytics' =>'',
            
        ]);
       


       


                // Camera Page "name" & ID=5
        // main table
        DB::table('cameras')->insert([
            'title' => 'TR-D3181IR3 v2 2.8',
            'sub_title' => 'Outdoor IP camera with IR illumination',
            'meta_name' => 'TR-D3181IR3 v2 2.8',
            'meta_description' => '<li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; position: relative; color: rgba(51, 51, 51, 0.8);">8 MP (3840 × 2160) IP-camera is designed taking into account the conditions of round-the-clock year-round outdoor operation in places out of sight of security personnel: the metal case is protected from mechanical impacts according to the IK10 code, from moisture and dust - according to the IP67 standard, operating temperatures - –40 ° C… +60 ° C, lightning protection - TVS 2000 V, range of integrated backlighting - 30 m.<br></li>',
            'image' => 'TR-D3181IR3 v2 2.8.png',
            'slug' => 'tr-d3181IR3-v2-2.8',
            'description' => '<li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; position: relative; color: rgba(51, 51, 51, 0.8);">8 MP (3840 × 2160) IP-camera is designed taking into account the conditions of round-the-clock year-round outdoor operation in places out of sight of security personnel: the metal case is protected from mechanical impacts according to the IK10 code, from moisture and dust - according to the IP67 standard, operating temperatures - –40 ° C… +60 ° C, lightning protection - TVS 2000 V, range of integrated backlighting - 30 m.<br></li>',
            
        ]);
        // Camera pages sections
        DB::table('camera_sections')->insert([
            'camera_id' => '5',
            'title' => 'Functionality:',
            'description' => '<li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Built-in microphone.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Detection of people.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Motion detection.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Control of the area.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Finding abandoned items.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Virtual line crossing detection, crossing statistics.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">WDR 120 dB - minimizes the effect of changes in light level on image quality.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">3D DNR - spatial noise reduction.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Supports vertical resolution (corridor mode) with an aspect ratio of 9:16.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Defog - Automatically removes blur introduced by fog or smoke by enhancing the contrast.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">ROI - fixing on the selected area and parallel reducing the resolution in the rest of the frame to optimize the bit rate.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">BLC - Backlight Compensation.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Day / night mode with ICR, with sufficient illumination to block the rays of the infrared range to normalize color reproduction; in the dark, the filter is shifted away from the matrix so that its sensitivity increases and the backlight can work.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Compression with H.265 +, H.264 +, H.265, H.264 codecs.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Stream broadcasting speed with a resolution of 8 Mp - 15 fps.</li>',
            
        ]);

        // Camera pages sections
        DB::table('camera_sections')->insert([
            'camera_id' => '5',
            'title' => 'BASICS',
            'description' => '<li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;"><span style="color: rgba(51, 51, 51, 0.8); font-family: Poppins, sans-serif; font-size: 16px;">TR-D3181IR3 v2 (2.8 mm) is equipped with a 2.8 mm fixed focal length lens, 91 ° horizontal field of view, 46 ° vertical field, F / 1.8 aperture. Equipped with an RJ-45 network port, a microSD slot with a capacity of up to 128 GB, a power connector. Power Supply - 12V DC or PoE. The maximum power consumption is 13 W. Dimensions - Ø142.0 × 113.4 mm. Weight - 650 g.</span><br></li>',
            
        ]);


        // Camera pages specifications
        DB::table('camera_specifications')->insert([
            'camera_id' => '5',
            'wdr' =>'WDR (120 dB)',
            'max_resoluton' =>'3840x2160',
            'resoluton' =>'',
            'sensor' =>'1/2.7" CMOS',
            'bitrate' =>'10',
            'power_supply' =>'DC 12 V, PoE',
            'lens' =>'2.8',
            'weight' =>'0.65',
            'senstivity' =>'0,005',
            'ingress_protection' =>'IP67',
            'dimensions' =>'Ø142x113.4',
            'power_consumption' =>'13',
            'temprature' =>'-40…+60',
            'mode' =>'Mechanic IR-filter',
            'network_interface' =>'RJ-45',
            'ir_range' =>'',
            'focal_length' =>'',
            'horizontal_fov' =>'',
            'aperture' =>'',
            'zoom_focus' =>'',
            'colors' =>'',
            'retention' =>'',
            'aspect_ratio' =>'',
            'audio_analytics' =>'',
            
        ]);



                // Camera Page "name" & ID=6
        // main table
        DB::table('cameras')->insert([
            'title' => 'TR-D3181IR3 v2 3.6',
            'sub_title' => 'Outdoor IP camera with IR illumination',
            'meta_name' => 'TRASSIR TR-D3181IR3 v2 (3.6 mm)',
            'meta_description' => '<li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;"><span style="color: rgba(51, 51, 51, 0.8); font-family: Poppins, sans-serif; font-size: 16px;">8 MP (3840 × 2160) IP-camera is designed taking into account the conditions of round-the-clock year-round outdoor operation in places out of sight of security personnel: the metal case is protected from mechanical impacts according to the IK10 code, from moisture and dust - according to the IP67 standard, operating temperatures - –40 ° C… +60 ° C, lightning protection - TVS 2000 V, range of integrated backlighting - 30 m.</span><br></li>',
            'image' => 'TR-D3181IR3 v2 3.6.png',
            'slug' => 'tr-d3181IR3-v2-3.6',
            'description' => '<li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;"><span style="color: rgba(51, 51, 51, 0.8); font-family: Poppins, sans-serif; font-size: 16px;">8 MP (3840 × 2160) IP-camera is designed taking into account the conditions of round-the-clock year-round outdoor operation in places out of sight of security personnel: the metal case is protected from mechanical impacts according to the IK10 code, from moisture and dust - according to the IP67 standard, operating temperatures - –40 ° C… +60 ° C, lightning protection - TVS 2000 V, range of integrated backlighting - 30 m.</span><br></li>',
            
        ]);
        // Camera pages sections
        DB::table('camera_sections')->insert([
            'camera_id' => '6',
            'title' => 'Functionality:',
            'description' => '<li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Built-in microphone.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Detection of people.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Motion detection.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Control of the area.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Finding abandoned items.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Virtual line crossing detection, crossing statistics.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">WDR 120 dB - minimizes the effect of changes in light level on image quality.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">3D DNR - spatial noise reduction.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Supports vertical resolution (corridor mode) with an aspect ratio of 9:16.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Defog - Automatically removes blur introduced by fog or smoke by enhancing the contrast.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">ROI - fixing on the selected area and parallel reducing the resolution in the rest of the frame to optimize the bit rate.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">BLC - Backlight Compensation.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Day / night mode with ICR, with sufficient illumination to block the rays of the infrared range to normalize color reproduction; in the dark, the filter is shifted away from the matrix so that its sensitivity increases and the backlight can work.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Compression with H.265 +, H.264 +, H.265, H.264 codecs.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Stream broadcasting speed with a resolution of 8 Mp - 15 fps.</li>',
            
        ]);

        // Camera pages sections
        DB::table('camera_sections')->insert([
            'camera_id' => '6',
            'title' => 'BASICS',
            'description' => '<li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;"><span style="color: rgba(51, 51, 51, 0.8); font-family: Poppins, sans-serif; font-size: 16px;">TR-D3181IR3 v2 (3.6 mm) is equipped with a 3.6 mm fixed focal length lens, 91 ° horizontal field of view, 46 ° vertical field, F / 1.8 aperture. Equipped with an RJ-45 network port, a microSD slot with a capacity of up to 128 GB, a power connector. Power Supply - 12V DC or PoE. The maximum power consumption is 13 W. Dimensions - Ø142.0 × 113.4 mm. Weight - 650 g.</span><br></li>',
            
        ]);


        // Camera pages specifications
        DB::table('camera_specifications')->insert([
            'camera_id' => '6',
            'wdr' =>'WDR (120 dB)',
            'max_resoluton' =>'3840x2160',
            'resoluton' =>'',
            'sensor' =>'1/2.7" CMOS',
            'bitrate' =>'10',
            'power_supply' =>'DC 12 V, PoE',
            'lens' =>'3.6',
            'weight' =>'0.65',
            'senstivity' =>'0,005',
            'ingress_protection' =>'IP67',
            'dimensions' =>'Ø142x113.4',
            'power_consumption' =>'13',
            'temprature' =>'-40…+60',
            'mode' =>'Mechanic IR-filter',
            'network_interface' =>'RJ-45',
            'ir_range' =>'',
            'focal_length' =>'',
            'horizontal_fov' =>'',
            'aperture' =>'',
            'zoom_focus' =>'',
            'colors' =>'',
            'retention' =>'',
            'aspect_ratio' =>'',
            'audio_analytics' =>'',
            
        ]);



                // Camera Page "name" & ID=7
        // main table
        DB::table('cameras')->insert([
            'title' => 'TR-D3183ZIR3 v2 2.7-13.5',
            'sub_title' => 'Outdoor IP camera with IR illumination',
            'meta_name' => 'TR-D3183ZIR3 v2',
            'meta_description' => '<li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;"><span style="color: rgba(51, 51, 51, 0.8); font-family: Poppins, sans-serif; font-size: 16px;">8 MP (3840 × 2160) IP-camera adapted for outdoor use in places of direct access, regardless of the season: protection of the case against moisture and dust - IP67, against mechanical influences - IK10, operating temperatures - –40 ° C ... +60 ° C, lightning protection - TVS 2000 V.</span><br></li>',
            'image' => 'TR-D3183ZIR3 v2 2.7-13.5.png',
            'slug' => 'tr-d3183ZIR3-v2-2.7-13.5',
            'description' => '<li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;"><span style="color: rgba(51, 51, 51, 0.8); font-family: Poppins, sans-serif; font-size: 16px;">8 MP (3840 × 2160) IP-camera adapted for outdoor use in places of direct access, regardless of the season: protection of the case against moisture and dust - IP67, against mechanical influences - IK10, operating temperatures - –40 ° C ... +60 ° C, lightning protection - TVS 2000 V.</span><br></li>',
            
        ]);
        // Camera pages sections
        DB::table('camera_sections')->insert([
            'camera_id' => '7',
            'title' => 'Functionality:',
            'description' => '<li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Detection of people.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Motion detection software.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Control of the area.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Finding abandoned items.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Virtual line crossing detection, crossing statistics.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Built-in microphone.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">IR illumination with a range of 35 m.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">WDR 120 dB - neutralizes the effect of different-contrast lighting on the image quality.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">3D DNR - Noise Reduction.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Corridor Mode - Supports 9:16 vertical orientation.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Defog - increasing the contrast to eliminate the effect of fog and smoke.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">ROI - fixing on the selected area and simultaneously reducing the resolution in the rest of the frame to optimize the bitrate.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">BLC - Backlight Compensation.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Day / night mode with ICR, with sufficient illumination to refract infrared rays.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Broadcast speed: 8 MP - 15 fps.</li>',
            
        ]);

        // Camera pages sections
        DB::table('camera_sections')->insert([
            'camera_id' => '7',
            'title' => 'BASICS',
            'description' => '<li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;"><span style="color: rgba(51, 51, 51, 0.8); font-family: Poppins, sans-serif; font-size: 16px;">TR-D3183ZIR3 v2 is equipped with a 2.7 ~ 13.5mm zoom lens, 101 ° ~ 32 ° horizontal field of view, 53 ° ~ 18 ° vertical field, F / 1.3 aperture. For the organization of two-way audio communication with the installation site of the camera, audio input and output are provided, for connecting an additional sensor and communication with a PTZ camera - alarm input and alarm output, compression - H.265 +, H.264 +, H.265, H.264 codecs, connections to the network - an RJ-45 port, the formation of an internal archive - a slot for microSD with a capacity of up to 128 GB. Power supply - DC 12 V, PoE. The maximum power consumption is 13 W. Dimensions - Ø142.0 × 113.4 mm. Weight - 793 g.</span><br></li>',
            
        ]);


        // Camera pages specifications
        DB::table('camera_specifications')->insert([
            'camera_id' => '7',
            'wdr' =>'WDR (120 dB)',
            'max_resoluton' =>'3840x2160',
            'resoluton' =>'',
            'sensor' =>'1/2.7" CMOS',
            'bitrate' =>'10',
            'power_supply' =>'DC 12 V, PoE',
            'lens' =>'2.7- 13.5',
            'weight' =>'0.793',
            'senstivity' =>'0,003',
            'ingress_protection' =>'IP67',
            'dimensions' =>'Ø142x113.4',
            'power_consumption' =>'13',
            'temprature' =>'-40…+60',
            'mode' =>'Mechanic IR-filter',
            'network_interface' =>'',
            'ir_range' =>'',
            'focal_length' =>'',
            'horizontal_fov' =>'',
            'aperture' =>'',
            'zoom_focus' =>'',
            'colors' =>'',
            'retention' =>'',
            'aspect_ratio' =>'',
            'audio_analytics' =>'',
            
        ]);




                // Camera Page "TR-D8181IR3 v2 2.8" & ID=8
        // main table
        DB::table('cameras')->insert([
            'title' => 'TR-D8181IR3 v2 2.8',
            'sub_title' => 'Outdoor IP camera with IR illumination',
            'meta_name' => 'TR-D8181IR3 v2 2.8',
            'meta_description' => '<li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;"><span style="color: rgba(51, 51, 51, 0.8); font-family: Poppins, sans-serif; font-size: 16px;">8 MP (3840 × 2160) IP-camera is designed taking into account the conditions of round-the-clock year-round outdoor operation in places out of sight of security personnel: the metal case is protected from mechanical impacts according to the IK10 code, from moisture and dust - according to the IP67 standard, operating temperatures - –40 ° C… +60 ° C, lightning protection - TVS 2000 V, range of integrated backlighting - 30 m.</span><br></li>',
            'image' => 'TR-D8181IR3 v2 2.8.png',
            'slug' => 'tr-d8181IR3-v2-2.8',
            'description' => '<li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;"><span style="color: rgba(51, 51, 51, 0.8); font-family: Poppins, sans-serif; font-size: 16px;">8 MP (3840 × 2160) IP-camera is designed taking into account the conditions of round-the-clock year-round outdoor operation in places out of sight of security personnel: the metal case is protected from mechanical impacts according to the IK10 code, from moisture and dust - according to the IP67 standard, operating temperatures - –40 ° C… +60 ° C, lightning protection - TVS 2000 V, range of integrated backlighting - 30 m.</span><br></li>',
            
        ]);
        // Camera pages sections
        DB::table('camera_sections')->insert([
            'camera_id' => '8',
            'title' => 'Functionality:',
            'description' => '<li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Face detection.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Detection of people.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Motion detection software.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Control of the area.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Finding abandoned items.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Virtual line crossing detection, crossing statistics.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Built-in microphone.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">IR with a range of 30 m.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">WDR 120 dB - reducing the influence of changes in the level of illumination on the picture quality.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">3D DNR - spatial noise reduction.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Corridor Mode - Supports 9:16 vertical orientation.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Defog - increase the contrast to eliminate the effect of fog, smoke.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">ROI - fixing on the selected area and simultaneously reducing the resolution in the rest of the frame to optimize the bitrate.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">BLC - Backlight Compensation.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Day / night mode with ICR, with sufficient illumination refracting infrared rays to optimize color reproduction, and in the dark shifting to increase the sensitivity of the matrix and the operation of the backlight.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Compression H.265 +, H.264 +, H.265, H.264.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Broadcast speed: 8 MP - 15 fps Face detection.</li>',
            
        ]);

        // Camera pages sections
        DB::table('camera_sections')->insert([
            'camera_id' => '8',
            'title' => 'BASICS',
            'description' => '<li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;"><span style="color: rgba(51, 51, 51, 0.8); font-family: Poppins, sans-serif; font-size: 16px;">TR-D8181IR3 v2 (2.8mm) comes with a fixed lens. Parameters: focal length - 2.8 mm, horizontal viewing angle - 110 °, vertical - 59 °, aperture - F / 1.8. Onboard network port RJ-45, slot for microSD cards up to 128 GB, power connector. Power supply - DC 12 V, PoE. The maximum power consumption is 13 W. Dimensions - Ø103.5 × 82.4 mm. Weight - 330 g.</span><br></li>',
            
        ]);


        // Camera pages specifications
        DB::table('camera_specifications')->insert([
            'camera_id' => '8',
            'wdr' =>'WDR (120 dB)',
            'max_resoluton' =>'WDR (120 dB)',
            'resoluton' =>'',
            'sensor' =>'WDR (120 dB)',
            'bitrate' =>'10',
            'power_supply' =>'WDR (120 dB)',
            'lens' =>'WDR (120 dB)',
            'weight' =>'0.33',
            'senstivity' =>'0,005',
            'ingress_protection' =>'IP67',
            'dimensions' =>'Ø103.5x82.4',
            'power_consumption' =>'13',
            'temprature' =>'-40…+60',
            'mode' =>'Mechanic IR-filter',
            'network_interface' =>'RJ-45',
            'ir_range' =>'',
            'focal_length' =>'',
            'horizontal_fov' =>'',
            'aperture' =>'',
            'zoom_focus' =>'',
            'colors' =>'',
            'retention' =>'',
            'aspect_ratio' =>'',
            'audio_analytics' =>'',
            
        ]);



    }
}