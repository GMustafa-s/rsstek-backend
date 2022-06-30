<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CustomPagesSeeder::class);
        $this->call(GeneralSetting::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeed::class);
        $this->call(HomepageSeeder::class);
        $this->call(WhatWeUseSeeder::class);
        $this->call(AboutUsFeatureSeeder::class);
        $this->call(SolutionPageSeeder::class);
        $this->call(AboutusPageSeeder::class);
        $this->call(IntegrationsPageSeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
