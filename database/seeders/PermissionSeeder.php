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
                'name' =>'test permission',
                'guard_name' =>'web'
            ]
        ];

        foreach($permissions as $permission){
            DB::table('permissions')->insert($permission);
        }
    }
}
