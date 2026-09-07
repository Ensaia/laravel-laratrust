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
                'display_name' => 'مدير',
                'description' => 'يسمح لصاحب هذا الحساب بإدارة جميع الموارد',
                'created_at' => '2026-07-28 12:23:12',
                'updated_at' => '2026-07-28 12:23:12',
            ),
            1 => 
            array (
                'id' => 9,
                'name' => 'publisher',
                'display_name' => 'ناشر',
                'description' => 'يسمح لصاحب هذا الحساب بإدارة جميع المناشير',
                'created_at' => '2026-08-15 08:19:50',
                'updated_at' => '2026-08-15 08:20:22',
            ),
            2 => 
            array (
                'id' => 10,
                'name' => 'user',
                'display_name' => 'مستخدم',
                'description' => 'صاحب هذا الحساب لا يملك أي صلاحيات أو أدوار',
                'created_at' => '2026-08-15 08:22:55',
                'updated_at' => '2026-08-15 08:22:55',
            ),
            3 => 
            array (
                'id' => 11,
                'name' => 'editor',
                'display_name' => 'محرر',
                'description' => 'يسمح لصاحب هذا الحساب بتحديث بيانات المناشير فقط',
                'created_at' => '2026-08-21 04:51:05',
                'updated_at' => '2026-08-21 04:51:05',
            ),
        ));
        
        
    }
}