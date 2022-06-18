<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GeneralSetting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => 'RRSTEK | Intelligent Video Analitycs',
            'description' => '',
            'favicon' => 'favicon.ico',
            'logo' => 'logo.svg',
            'phone' => '545454456',
            'email' => 'info@rrsteksecurity.com',
            'copy_right_text' => 'Copyright © 2022 RRSTEK All rights reserved',
        ]);
    }
}
