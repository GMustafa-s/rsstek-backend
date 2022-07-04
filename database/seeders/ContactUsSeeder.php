<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //cantact us page section
        DB::table('contact_uses')->insert([
            'main_heading' => 'Have a question?',
            'small_description' => 'Lets talk about what you need. Fill out the form and we\'ll get back to you.',

        ]);
    }
}
