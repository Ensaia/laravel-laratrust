<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CacheTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cache')->delete();
        
        \DB::table('cache')->insert(array (
            0 => 
            array (
                'key' => 'lara-trast-cache-e26d25b7baa8e1d9fec1a051b94bbd6d:timer',
                'value' => 'i:1779464584;',
                'expiration' => 1779464584,
            ),
            1 => 
            array (
                'key' => 'lara-trast-cache-e26d25b7baa8e1d9fec1a051b94bbd6d',
                'value' => 'i:1;',
                'expiration' => 1779464584,
            ),
        ));
        
        
    }
}