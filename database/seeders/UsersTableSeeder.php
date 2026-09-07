<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'mohammed',
                'email' => 'mohammed@laravel.com',
                'email_verified_at' => '2026-06-03 19:11:34',
                'password' => '$2y$10$fBO/tOCNpV/ISVLD9KEcc.ucUWglANQ4d8NVBJXvGX5CZuMyOwhHq',
                'remember_token' => NULL,
                'created_at' => '2026-07-28 11:34:11',
                'updated_at' => '2026-08-21 04:44:02',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'User1',
                'email' => 'user1@laravel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.vs6lNlmBgJHJFRkegoO/u2xbaMgA/itw8ueEp7Y.uSDa5kUYNzp.',
                'remember_token' => NULL,
                'created_at' => '2026-08-15 09:57:27',
                'updated_at' => '2026-08-15 09:57:27',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'User2',
                'email' => 'user2@laravel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.vs6lNlmBgJHJFRkegoO/u2xbaMgA/itw8ueEp7Y.uSDa5kUYNzp.',
                'remember_token' => NULL,
                'created_at' => '2026-08-21 19:30:28',
                'updated_at' => '2026-08-21 19:30:28',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
            ),
        ));
        
        
    }
}