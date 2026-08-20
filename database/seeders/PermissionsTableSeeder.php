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
                'name' => 'edit-user',
                'display_name' => 'تعديل بيانات مستخدم',
                'description' => 'يسمح لهذا المستخدم بتعديل بيانات المستخدمين',
                'created_at' => '2026-02-06 17:24:06',
                'updated_at' => '2026-03-30 15:57:31',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'create-post',
                'display_name' => 'Create Posts',
                'description' => 'create new blog posts',
                'created_at' => '2026-02-06 19:51:24',
                'updated_at' => '2026-02-06 19:51:24',
            ),
        ));
        
        
    }
}