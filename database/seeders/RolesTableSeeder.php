<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'مدير الصفحة',
                'description' => 'يمتلك هذا المستخدم جميع الصلاحيات',
                'created_at' => '2026-02-04 20:42:29',
                'updated_at' => '2026-03-13 18:20:39',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'owner',
                'display_name' => 'Project Owner',
                'description' => 'User is the owner of a given project',
                'created_at' => '2026-02-06 10:31:30',
                'updated_at' => '2026-02-06 10:31:30',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'developer',
                'display_name' => 'Web Developer',
                'description' => 'Focuses on code server configuration database management and API integrations',
                'created_at' => '2026-02-06 10:33:48',
                'updated_at' => '2026-02-06 10:33:48',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'user',
                'display_name' => 'مستخدم',
                'description' => 'هذا المستخدم لا يمتلك أي صلاحيات',
                'created_at' => '2026-02-13 05:45:36',
                'updated_at' => '2026-03-13 18:22:22',
            ),
        ));
        
        
    }
}