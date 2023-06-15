<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('roles')->insert([
            'role' => 'Super Admin',
            'description' => 'super admin',
            'slug' => 'super-admin',
            'status' => '1'
        ]);

        DB::table('roles')->insert([
            'role' => 'Manager',
            'description' => 'Manager',
            'slug' => 'manager',
            'status' => '1'
        ]);

        DB::table('roles')->insert([
            'role' => 'Users',
            'description' => 'users',
            'slug' => 'users',
            'status' => '1'
        ]);

        
    }
}
