<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PasswordResetTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_reset_tokens')->delete();
        
        \DB::table('password_reset_tokens')->insert(array (
            0 => 
            array (
                'email' => 'mohammed@laravel.com',
                'token' => '$2y$12$z1drImkraRe43QGnVgZuDOn3QOiC3A.vUMIWwAS8wyZu7AAA1/ICC',
                'created_at' => '2026-03-09 20:53:02',
            ),
        ));
        
        
    }
}