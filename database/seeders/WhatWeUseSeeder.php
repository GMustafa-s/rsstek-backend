<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class WhatWeUseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('what_we_use_images')->insert([
            'image' => 'TRASSIR.png',
        ]);
        DB::table('what_we_use_images')->insert([
            'image' => 'brand-logo-01.svg',
        ]);
        DB::table('what_we_use_images')->insert([
            'image' => 'brand-logo-02.svg',
        ]);
        DB::table('what_we_use_images')->insert([
            'image' => 'brand-logo-03.svg',
        ]);
        DB::table('what_we_use_images')->insert([
            'image' => 'brand-logo-04.svg',
        ]);
    }
}
