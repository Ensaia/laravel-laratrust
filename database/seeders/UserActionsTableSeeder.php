<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserActionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_actions')->delete();
        
        \DB::table('user_actions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'action' => 'updated',
                'action_model' => 'App\\Models\\Post',
                'action_id' => '2',
                'created_at' => '2026-03-28 10:17:29',
                'updated_at' => '2026-03-28 10:17:29',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'action' => 'updated',
                'action_model' => 'App\\Models\\Post',
                'action_id' => '2',
                'created_at' => '2026-03-28 10:17:29',
                'updated_at' => '2026-03-28 10:17:29',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\Post',
                'action_id' => '2',
                'created_at' => '2026-03-28 10:24:12',
                'updated_at' => '2026-03-28 10:24:12',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\Post',
                'action_id' => '2',
                'created_at' => '2026-03-28 10:24:12',
                'updated_at' => '2026-03-28 10:24:12',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\Post',
                'action_id' => '2',
                'created_at' => '2026-03-28 10:26:00',
                'updated_at' => '2026-03-28 10:26:00',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\Post',
                'action_id' => '2',
                'created_at' => '2026-03-28 10:29:05',
                'updated_at' => '2026-03-28 10:29:05',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\Post',
                'action_id' => '2',
                'created_at' => '2026-03-28 10:53:38',
                'updated_at' => '2026-03-28 10:53:38',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\Post',
                'action_id' => '1',
                'created_at' => '2026-03-28 10:54:43',
                'updated_at' => '2026-03-28 10:54:43',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\Post',
                'action_id' => '1',
                'created_at' => '2026-03-28 10:58:52',
                'updated_at' => '2026-03-28 10:58:52',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\Post',
                'action_id' => '1',
                'created_at' => '2026-03-28 10:59:20',
                'updated_at' => '2026-03-28 10:59:20',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\Post',
                'action_id' => '1',
                'created_at' => '2026-03-28 11:00:35',
                'updated_at' => '2026-03-28 11:00:35',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\Post',
                'action_id' => '1',
                'created_at' => '2026-03-28 11:00:57',
                'updated_at' => '2026-03-28 11:00:57',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\Post',
                'action_id' => '1',
                'created_at' => '2026-03-28 11:02:52',
                'updated_at' => '2026-03-28 11:02:52',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 1,
                'action' => 'إضافة بيانات',
                'action_model' => 'App\\Models\\Post',
                'action_id' => '3',
                'created_at' => '2026-03-28 11:08:19',
                'updated_at' => '2026-03-28 11:08:19',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\Permission',
                'action_id' => '1',
                'created_at' => '2026-03-30 15:57:32',
                'updated_at' => '2026-03-30 15:57:32',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\User',
                'action_id' => '1',
                'created_at' => '2026-04-11 13:08:31',
                'updated_at' => '2026-04-11 13:08:31',
            ),
        ));
        
        
    }
}