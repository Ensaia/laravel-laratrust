<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '0001_01_01_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '0001_01_01_000001_create_cache_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '0001_01_01_000002_create_jobs_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2026_02_01_114006_add_two_factor_columns_to_users_table',
                'batch' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2026_02_02_200738_create_personal_access_tokens_table',
                'batch' => 3,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2026_02_02_200945_laratrust_setup_tables',
                'batch' => 4,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2025_02_14_135236_create_post_table',
                'batch' => 5,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2026_03_08_205302_create_login_history_table',
                'batch' => 6,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2026_03_08_113450_create_user_actions_table',
                'batch' => 7,
            ),
        ));
        
        
    }
}