<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'name' =>'dashbord',
                'guard_name' =>'web'
            ],
            [
                'name' =>'users.view',
                'guard_name' =>'web'
            ],
            [
                'name' =>'users.create',
                'guard_name' =>'web'
            ],
            [
                'name' =>'users.edit',
                'guard_name' =>'web'
            ],
            [
                'name' =>'users.delete',
                'guard_name' =>'web'
            ],
            [
                'name' =>'roles.view',
                'guard_name' =>'web'
            ],
            [
                'name' =>'roles.create',
                'guard_name' =>'web'
            ],
            [
                'name' =>'roles.edit',
                'guard_name' =>'web'
            ],
            [
                'name' =>'roles.delete',
                'guard_name' =>'web'
            ],
            [
                'name' =>'contactus.quesries.view',
                'guard_name' =>'web'
            ],
            [
                'name' =>'installation.quesries.view',
                'guard_name' =>'web'
            ],
            [
                'name' =>'demo.quesries.view',
                'guard_name' =>'web'
            ],
            [
                'name' =>'cms.camera.view',
                'guard_name' =>'web'
            ],
            [
                'name' =>'cms.camera.create',
                'guard_name' =>'web'
            ],
            [
                'name' =>'cms.camera.edit',
                'guard_name' =>'web'
            ],
            [
                'name' =>'cms.camera.delete',
                'guard_name' =>'web'
            ],
            [
                'name' =>'cms.solution.view',
                'guard_name' =>'web'
            ],
            [
                'name' =>'cms.solution.create',
                'guard_name' =>'web'
            ],
            [
                'name' =>'cms.solution.edit',
                'guard_name' =>'web'
            ],
            [
                'name' =>'cms.solution.delete',
                'guard_name' =>'web'
            ],
            [
                'name' =>'cms.solution.sub-page.view',
                'guard_name' =>'web'
            ],
            [
                'name' =>'cms.solution.sub-page.create',
                'guard_name' =>'web'
            ],
            [
                'name' =>'cms.solution.sub-page.edit',
                'guard_name' =>'web'
            ],
            [
                'name' =>'cms.solution.sub-page.delete',
                'guard_name' =>'web'
            ],

            
            
            
        ];

        foreach($permissions as $permission){
            DB::table('permissions')->insert($permission);
        }
    }
}
