<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DefaultSettingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('prayer_times')->table('default_setting')->delete();
        
        \DB::connection('prayer_times')->table('default_setting')->insert(array (
            0 => 
            array (
                'default_id' => 1,
                'city_id' => 16,
                'hijri_correction' => 0,
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
        ));
        
        
    }
}