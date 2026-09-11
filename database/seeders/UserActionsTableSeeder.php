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


        \DB::table('user_action')->delete();

        \DB::table('user_action')->insert(array (
            0 =>
            array (
                'id' => 1,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\User',
                'action_id' => '1',
                'created_at' => '2026-07-28 12:21:57',
                'updated_at' => '2026-07-28 12:21:57',
            ),
            1 =>
            array (
                'id' => 2,
                'user_id' => 1,
                'action' => 'إضافة بيانات',
                'action_model' => 'App\\Models\\Role',
                'action_id' => '1',
                'created_at' => '2026-07-28 12:23:12',
                'updated_at' => '2026-07-28 12:23:12',
            ),
            2 =>
            array (
                'id' => 3,
                'user_id' => 1,
                'action' => 'إضافة بيانات',
                'action_model' => 'App\\Models\\Permission',
                'action_id' => '1',
                'created_at' => '2026-08-04 11:11:09',
                'updated_at' => '2026-08-04 11:11:09',
            ),
            3 =>
            array (
                'id' => 4,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\Permission',
                'action_id' => '1',
                'created_at' => '2026-08-04 11:13:55',
                'updated_at' => '2026-08-04 11:13:55',
            ),
            4 =>
            array (
                'id' => 21,
                'user_id' => 1,
                'action' => 'إضافة بيانات',
                'action_model' => 'App\\Models\\Permission',
                'action_id' => '2',
                'created_at' => '2026-08-04 11:15:19',
                'updated_at' => '2026-08-04 11:15:19',
            ),
            5 =>
            array (
                'id' => 22,
                'user_id' => 1,
                'action' => 'إضافة بيانات',
                'action_model' => 'App\\Models\\Permission',
                'action_id' => '3',
                'created_at' => '2026-08-04 11:16:07',
                'updated_at' => '2026-08-04 11:16:07',
            ),
            6 =>
            array (
                'id' => 23,
                'user_id' => 1,
                'action' => 'حذف البيانات',
                'action_model' => 'App\\Models\\Post',
                'action_id' => '1',
                'created_at' => '2026-08-04 11:23:05',
                'updated_at' => '2026-08-04 11:23:05',
            ),
            7 =>
            array (
                'id' => 24,
                'user_id' => 1,
                'action' => 'إضافة بيانات',
                'action_model' => 'App\\Models\\Post',
                'action_id' => '1',
                'created_at' => '2026-08-04 11:23:12',
                'updated_at' => '2026-08-04 11:23:12',
            ),
            8 =>
            array (
                'id' => 25,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\User',
                'action_id' => '1',
                'created_at' => '2026-08-09 11:31:59',
                'updated_at' => '2026-08-09 11:31:59',
            ),
            9 =>
            array (
                'id' => 26,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\User',
                'action_id' => '1',
                'created_at' => '2026-08-09 11:34:09',
                'updated_at' => '2026-08-09 11:34:09',
            ),
            10 =>
            array (
                'id' => 27,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\User',
                'action_id' => '1',
                'created_at' => '2026-08-10 10:39:16',
                'updated_at' => '2026-08-10 10:39:16',
            ),
            11 =>
            array (
                'id' => 28,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\User',
                'action_id' => '1',
                'created_at' => '2026-08-10 10:43:19',
                'updated_at' => '2026-08-10 10:43:19',
            ),
            12 =>
            array (
                'id' => 29,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\User',
                'action_id' => '1',
                'created_at' => '2026-08-10 11:02:51',
                'updated_at' => '2026-08-10 11:02:51',
            ),
            13 =>
            array (
                'id' => 30,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\User',
                'action_id' => '1',
                'created_at' => '2026-08-10 11:03:03',
                'updated_at' => '2026-08-10 11:03:03',
            ),
            14 =>
            array (
                'id' => 31,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\User',
                'action_id' => '1',
                'created_at' => '2026-08-10 11:30:00',
                'updated_at' => '2026-08-10 11:30:00',
            ),
            15 =>
            array (
                'id' => 32,
                'user_id' => 1,
                'action' => 'إضافة بيانات',
                'action_model' => 'App\\Models\\Role',
                'action_id' => '9',
                'created_at' => '2026-08-15 08:19:50',
                'updated_at' => '2026-08-15 08:19:50',
            ),
            16 =>
            array (
                'id' => 33,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\Role',
                'action_id' => '9',
                'created_at' => '2026-08-15 08:20:22',
                'updated_at' => '2026-08-15 08:20:22',
            ),
            17 =>
            array (
                'id' => 34,
                'user_id' => 1,
                'action' => 'إضافة بيانات',
                'action_model' => 'App\\Models\\Role',
                'action_id' => '10',
                'created_at' => '2026-08-15 08:22:55',
                'updated_at' => '2026-08-15 08:22:55',
            ),
            18 =>
            array (
                'id' => 35,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\User',
                'action_id' => '2',
                'created_at' => '2026-08-15 08:35:43',
                'updated_at' => '2026-08-15 08:35:43',
            ),
            19 =>
            array (
                'id' => 36,
                'user_id' => 1,
                'action' => 'حذف البيانات',
                'action_model' => 'App\\Models\\User',
                'action_id' => '2',
                'created_at' => '2026-08-15 09:31:28',
                'updated_at' => '2026-08-15 09:31:28',
            ),
            20 =>
            array (
                'id' => 37,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\User',
                'action_id' => '1',
                'created_at' => '2026-08-20 19:23:26',
                'updated_at' => '2026-08-20 19:23:26',
            ),
            21 =>
            array (
                'id' => 38,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\User',
                'action_id' => '1',
                'created_at' => '2026-08-20 20:18:42',
                'updated_at' => '2026-08-20 20:18:42',
            ),
            22 =>
            array (
                'id' => 39,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\User',
                'action_id' => '1',
                'created_at' => '2026-08-21 04:13:22',
                'updated_at' => '2026-08-21 04:13:22',
            ),
            23 =>
            array (
                'id' => 40,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\User',
                'action_id' => '1',
                'created_at' => '2026-08-21 04:13:45',
                'updated_at' => '2026-08-21 04:13:45',
            ),
            24 =>
            array (
                'id' => 41,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\User',
                'action_id' => '1',
                'created_at' => '2026-08-21 04:14:37',
                'updated_at' => '2026-08-21 04:14:37',
            ),
            25 =>
            array (
                'id' => 42,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\User',
                'action_id' => '1',
                'created_at' => '2026-08-21 04:31:18',
                'updated_at' => '2026-08-21 04:31:18',
            ),
            26 =>
            array (
                'id' => 43,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\User',
                'action_id' => '1',
                'created_at' => '2026-08-21 04:31:56',
                'updated_at' => '2026-08-21 04:31:56',
            ),
            27 =>
            array (
                'id' => 44,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\User',
                'action_id' => '1',
                'created_at' => '2026-08-21 04:33:08',
                'updated_at' => '2026-08-21 04:33:08',
            ),
            28 =>
            array (
                'id' => 45,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\User',
                'action_id' => '1',
                'created_at' => '2026-08-21 04:36:28',
                'updated_at' => '2026-08-21 04:36:28',
            ),
            29 =>
            array (
                'id' => 46,
                'user_id' => 1,
                'action' => 'تحديث البيانات',
                'action_model' => 'App\\Models\\User',
                'action_id' => '1',
                'created_at' => '2026-08-21 04:44:02',
                'updated_at' => '2026-08-21 04:44:02',
            ),
            30 =>
            array (
                'id' => 47,
                'user_id' => 1,
                'action' => 'إضافة بيانات',
                'action_model' => 'App\\Models\\Role',
                'action_id' => '11',
                'created_at' => '2026-08-21 04:51:05',
                'updated_at' => '2026-08-21 04:51:05',
            ),
        ));


    }
}
