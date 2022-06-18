<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PageCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_categories')->insert([
            'name' => 'Business',
        ]);
        DB::table('page_categories')->insert([
            'name' => 'Healthcared',
        ]);
        DB::table('page_categories')->insert([
            'name' => 'Security',
        ]);
    }
}