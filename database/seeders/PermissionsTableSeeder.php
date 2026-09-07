<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'create-post',
                'display_name' => 'إضافة منشور',
                'description' => 'يسمح لصاحب هذا الحساب بإضافة منشور',
                'created_at' => '2026-08-04 11:11:08',
                'updated_at' => '2026-08-04 11:13:55',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'edit-post',
                'display_name' => 'تحديث بيانات منشور',
                'description' => 'يسمح لصاحب هذا الحساب بتحديث بيانات منشور',
                'created_at' => '2026-08-04 11:15:19',
                'updated_at' => '2026-08-04 11:15:19',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'delete-post',
                'display_name' => 'حذف بيانات منشور',
                'description' => 'يسمح لصاحب هذا الحساب بحذف بيانات منشور',
                'created_at' => '2026-08-04 11:16:07',
                'updated_at' => '2026-08-04 11:16:07',
            ),
        ));
        
        
    }
}