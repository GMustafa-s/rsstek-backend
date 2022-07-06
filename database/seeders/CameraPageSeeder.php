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
        //


// Camera Page "name" & ID=1
// main table
DB::table('cameras')->insert([
    'title' => 'TR-D2183ZIR6 v2 2.7-13.5',
    'sub_title' => 'Outdoor IP camera with IR illumination',
    'meta_name' => 'TR-D2183ZIR6 v2 2.7-13.5',
    'meta_description' => '
    8 MP (3840 × 2160) IP-camera is adapted for outdoor use regardless of the season: protection of the case against moisture and dust meets the requirements of the IP67 standard, operating temperatures - –40 ° C ... +60 ° C, lightning protection - TVS 2000 V ( high voltage suppressor up to 2000 V). Suitable for night surveillance - equipped with IR illumination with a range of 60 m.
    ',
    'image' => 'TR-D2183ZIR6 v2 2.7-13.5.jpg',
    'slug' => 'tr-d2183ZIR6-v2-2.7-13.5',
    'description' => '
    8 MP (3840 × 2160) IP-camera is adapted for outdoor use regardless of the season: protection of the case against moisture and dust meets the requirements of the IP67 standard, operating temperatures - –40 ° C ... +60 ° C, lightning protection - TVS 2000 V ( high voltage suppressor up to 2000 V). Suitable for night surveillance - equipped with IR illumination with a range of 60 m.
    ',

    ]);
    // Camera pages sections
    DB::table('camera_sections')->insert([
    'camera_id' => '1',
    'title' => 'Functionality:',
    'description' => '
    Detection of people.
    Motion detection software.
    Control of the area.
    Finding abandoned items.
    Virtual line crossing detection, cross statistics.
    WDR 120 dB - neutralizes the effect of different-contrast lighting on the image quality.
    3D DNR - Noise Reduction.
    Shooting in vertically oriented resolution (2160 × 3840).
    Defog - increasing the contrast to eliminate the effect of fog and smoke.
    ROI - fixing on the selected area and simultaneously reducing the resolution in the rest of the frame to optimize the bitrate.
    BLC - Backlight Compensation.
    Day / night mode with ICR, with sufficient illumination to refract infrared rays.
    Broadcast speed: 8 MP - 15 fps.
    ',

    ]);

    // Camera pages sections
    DB::table('camera_sections')->insert([
    'camera_id' => '1',
    'title' => 'BASICS',
    'description' => '
    Power supply - DC 12 V, PoE. The maximum power consumption is 13 W. Dimensions - Ø74.5 × 215.8 mm. Weight - 726 g.
    ',

    ]);


    // Camera pages specifications
    DB::table('camera_specifications')->insert([
    'camera_id' => '1',
    'wdr' =>'',
    'max_resoluton' =>'',
    'resoluton' =>'',
    'sensor' =>'',
    'bitrate' =>'',
    'power_supply' =>'',
    'lens' =>'',
    'weight' =>'',
    'senstivity' =>'',
    'ingress_protection' =>'',
    'dimensions' =>'',
    'power_consumption' =>'',
    'temprature' =>'',
    'mode' =>'',
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



    }
}
