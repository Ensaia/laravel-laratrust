<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LoginHistoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('login_history')->delete();
        
        \DB::table('login_history')->insert(array (
            0 => 
            array (
                'id' => 67,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Windows',
                'created_at' => '2026-07-28 11:34:35',
                'updated_at' => '2026-07-28 11:34:35',
            ),
            1 => 
            array (
                'id' => 68,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Windows',
                'created_at' => '2026-08-04 10:54:13',
                'updated_at' => '2026-08-04 10:54:13',
            ),
            2 => 
            array (
                'id' => 69,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Windows',
                'created_at' => '2026-08-09 09:59:09',
                'updated_at' => '2026-08-09 09:59:09',
            ),
            3 => 
            array (
                'id' => 70,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Windows',
                'created_at' => '2026-08-10 10:38:53',
                'updated_at' => '2026-08-10 10:38:53',
            ),
            4 => 
            array (
                'id' => 71,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Windows',
                'created_at' => '2026-08-10 11:30:41',
                'updated_at' => '2026-08-10 11:30:41',
            ),
            5 => 
            array (
                'id' => 72,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Windows',
                'created_at' => '2026-08-13 11:19:31',
                'updated_at' => '2026-08-13 11:19:31',
            ),
            6 => 
            array (
                'id' => 73,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Safari',
                'platform' => 'Linux',
                'created_at' => '2026-08-15 08:16:29',
                'updated_at' => '2026-08-15 08:16:29',
            ),
            7 => 
            array (
                'id' => 74,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Safari',
                'platform' => 'Linux',
                'created_at' => '2026-08-15 08:22:01',
                'updated_at' => '2026-08-15 08:22:01',
            ),
            8 => 
            array (
                'id' => 75,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Safari',
                'platform' => 'Linux',
                'created_at' => '2026-08-15 09:29:46',
                'updated_at' => '2026-08-15 09:29:46',
            ),
            9 => 
            array (
                'id' => 76,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Safari',
                'platform' => 'Linux',
                'created_at' => '2026-08-15 13:02:36',
                'updated_at' => '2026-08-15 13:02:36',
            ),
            10 => 
            array (
                'id' => 77,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Safari',
                'platform' => 'Linux',
                'created_at' => '2026-08-15 13:03:19',
                'updated_at' => '2026-08-15 13:03:19',
            ),
            11 => 
            array (
                'id' => 78,
                'user_id' => 3,
                'name' => 'User1',
                'email' => 'user1@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Safari',
                'platform' => 'Linux',
                'created_at' => '2026-08-15 13:03:44',
                'updated_at' => '2026-08-15 13:03:44',
            ),
            12 => 
            array (
                'id' => 79,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Linux',
                'created_at' => '2026-08-20 17:49:29',
                'updated_at' => '2026-08-20 17:49:29',
            ),
            13 => 
            array (
                'id' => 80,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Linux',
                'created_at' => '2026-08-21 04:11:04',
                'updated_at' => '2026-08-21 04:11:04',
            ),
            14 => 
            array (
                'id' => 81,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Linux',
                'created_at' => '2026-08-21 04:45:22',
                'updated_at' => '2026-08-21 04:45:22',
            ),
            15 => 
            array (
                'id' => 82,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Linux',
                'created_at' => '2026-08-21 09:01:28',
                'updated_at' => '2026-08-21 09:01:28',
            ),
            16 => 
            array (
                'id' => 83,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Linux',
                'created_at' => '2026-08-21 12:50:38',
                'updated_at' => '2026-08-21 12:50:38',
            ),
            17 => 
            array (
                'id' => 84,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Linux',
                'created_at' => '2026-08-21 19:23:13',
                'updated_at' => '2026-08-21 19:23:13',
            ),
            18 => 
            array (
                'id' => 85,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Linux',
                'created_at' => '2026-08-21 22:31:05',
                'updated_at' => '2026-08-21 22:31:05',
            ),
            19 => 
            array (
                'id' => 86,
                'user_id' => 4,
                'name' => 'User2',
                'email' => 'user2@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Linux',
                'created_at' => '2026-08-22 18:30:52',
                'updated_at' => '2026-08-22 18:30:52',
            ),
            20 => 
            array (
                'id' => 87,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Linux',
                'created_at' => '2026-08-23 18:18:50',
                'updated_at' => '2026-08-23 18:18:50',
            ),
            21 => 
            array (
                'id' => 88,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Linux',
                'created_at' => '2026-08-25 17:35:02',
                'updated_at' => '2026-08-25 17:35:02',
            ),
            22 => 
            array (
                'id' => 89,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Linux',
                'created_at' => '2026-08-27 15:56:04',
                'updated_at' => '2026-08-27 15:56:04',
            ),
            23 => 
            array (
                'id' => 90,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Linux',
                'created_at' => '2026-08-27 18:56:06',
                'updated_at' => '2026-08-27 18:56:06',
            ),
            24 => 
            array (
                'id' => 91,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Linux',
                'created_at' => '2026-08-28 10:02:02',
                'updated_at' => '2026-08-28 10:02:02',
            ),
            25 => 
            array (
                'id' => 92,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Safari',
                'platform' => 'Linux',
                'created_at' => '2026-08-28 10:23:25',
                'updated_at' => '2026-08-28 10:23:25',
            ),
            26 => 
            array (
                'id' => 93,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Linux',
                'created_at' => '2026-08-28 12:26:55',
                'updated_at' => '2026-08-28 12:26:55',
            ),
            27 => 
            array (
                'id' => 94,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Safari',
                'platform' => 'Linux',
                'created_at' => '2026-08-28 13:19:03',
                'updated_at' => '2026-08-28 13:19:03',
            ),
            28 => 
            array (
                'id' => 95,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Safari',
                'platform' => 'Linux',
                'created_at' => '2026-08-28 16:01:15',
                'updated_at' => '2026-08-28 16:01:15',
            ),
            29 => 
            array (
                'id' => 96,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Linux',
                'created_at' => '2026-09-04 07:33:51',
                'updated_at' => '2026-09-04 07:33:51',
            ),
            30 => 
            array (
                'id' => 97,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Linux',
                'created_at' => '2026-09-06 20:14:02',
                'updated_at' => '2026-09-06 20:14:02',
            ),
            31 => 
            array (
                'id' => 98,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Linux',
                'created_at' => '2026-09-06 20:51:58',
                'updated_at' => '2026-09-06 20:51:58',
            ),
            32 => 
            array (
                'id' => 99,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Windows',
                'created_at' => '2026-09-06 12:17:05',
                'updated_at' => '2026-09-06 12:17:05',
            ),
            33 => 
            array (
                'id' => 100,
                'user_id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'ip_address' => '127.0.0.1',
                'browser' => 'Firefox',
                'platform' => 'Linux',
                'created_at' => '2026-09-07 12:58:03',
                'updated_at' => '2026-09-07 12:58:03',
            ),
        ));
        
        
    }
}