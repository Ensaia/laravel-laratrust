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
                'key' => 'lara-trast-cache-da4b9237bacccdf19c0760cab7aec4a8359010b0:timer',
                'value' => 'i:1786783003;',
                'expiration' => 1786783003,
            ),
            1 => 
            array (
                'key' => 'lara-trast-cache-da4b9237bacccdf19c0760cab7aec4a8359010b0',
                'value' => 'i:1;',
                'expiration' => 1786783003,
            ),
            2 => 
            array (
                'key' => 'lara-trast-cache-0fbbe06442f54729c08164a17aba22d4:timer',
                'value' => 'i:1786799084;',
                'expiration' => 1786799084,
            ),
            3 => 
            array (
                'key' => 'lara-trast-cache-0fbbe06442f54729c08164a17aba22d4',
                'value' => 'i:1;',
                'expiration' => 1786799084,
            ),
            4 => 
            array (
                'key' => 'lara-trast-cache-356a192b7913b04c54574d18c28d46e6395428ab:timer',
                'value' => 'i:1787257173;',
                'expiration' => 1787257173,
            ),
            5 => 
            array (
                'key' => 'lara-trast-cache-356a192b7913b04c54574d18c28d46e6395428ab',
                'value' => 'i:2;',
                'expiration' => 1787257173,
            ),
            6 => 
            array (
                'key' => 'lara-trast-cache-d1b1d757d625795cab6a991c0b060f04:timer',
                'value' => 'i:1787423512;',
                'expiration' => 1787423512,
            ),
            7 => 
            array (
                'key' => 'lara-trast-cache-d1b1d757d625795cab6a991c0b060f04',
                'value' => 'i:1;',
                'expiration' => 1787423512,
            ),
            8 => 
            array (
                'key' => 'lara-trast-cache-e26d25b7baa8e1d9fec1a051b94bbd6d:timer',
                'value' => 'i:1788727978;',
                'expiration' => 1788727978,
            ),
            9 => 
            array (
                'key' => 'lara-trast-cache-e26d25b7baa8e1d9fec1a051b94bbd6d',
                'value' => 'i:2;',
                'expiration' => 1788727978,
            ),
        ));
        
        
    }
}