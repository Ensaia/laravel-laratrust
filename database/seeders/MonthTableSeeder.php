<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MonthTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('prayer_times')->table('month')->delete();
        
        \DB::connection('prayer_times')->table('month')->insert(array (
            0 => 
            array (
                'month_id' => 1,
                'month_number' => 1,
                'month_name' => 'يناير',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            1 => 
            array (
                'month_id' => 2,
                'month_number' => 2,
                'month_name' => 'فبراير',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            2 => 
            array (
                'month_id' => 3,
                'month_number' => 3,
                'month_name' => 'مارس',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            3 => 
            array (
                'month_id' => 4,
                'month_number' => 4,
                'month_name' => 'إبريل',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            4 => 
            array (
                'month_id' => 5,
                'month_number' => 5,
                'month_name' => 'مايو',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            5 => 
            array (
                'month_id' => 6,
                'month_number' => 6,
                'month_name' => 'يونيو',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            6 => 
            array (
                'month_id' => 7,
                'month_number' => 7,
                'month_name' => 'يوليو',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            7 => 
            array (
                'month_id' => 8,
                'month_number' => 8,
                'month_name' => 'أغسطس',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            8 => 
            array (
                'month_id' => 9,
                'month_number' => 9,
                'month_name' => 'سبتمبر',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            9 => 
            array (
                'month_id' => 10,
                'month_number' => 10,
                'month_name' => 'أكتوبر',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            10 => 
            array (
                'month_id' => 11,
                'month_number' => 11,
                'month_name' => 'نوفمبر',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            11 => 
            array (
                'month_id' => 12,
                'month_number' => 12,
                'month_name' => 'ديسمبر',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
        ));
        
        
    }
}