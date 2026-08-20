<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('prayer_times')->table('city')->delete();
        
        \DB::connection('prayer_times')->table('city')->insert(array (
            0 => 
            array (
                'city_id' => 1,
                'city_name' => 'البريقة',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            1 => 
            array (
                'city_id' => 2,
                'city_name' => 'إجدابيا',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            2 => 
            array (
                'city_id' => 3,
                'city_name' => 'اﻷصابعة',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            3 => 
            array (
                'city_id' => 4,
                'city_name' => 'البيضاء',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            4 => 
            array (
                'city_id' => 5,
                'city_name' => 'القطرون',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            5 => 
            array (
                'city_id' => 6,
                'city_name' => 'الجغبوب',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            6 => 
            array (
                'city_id' => 7,
                'city_name' => 'الكفرة',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            7 => 
            array (
                'city_id' => 8,
                'city_name' => 'الخمس',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            8 => 
            array (
                'city_id' => 9,
                'city_name' => 'المرج',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            9 => 
            array (
                'city_id' => 10,
                'city_name' => 'الشقيقة',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            10 => 
            array (
                'city_id' => 11,
                'city_name' => 'الزاوية',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            11 => 
            array (
                'city_id' => 12,
                'city_name' => 'الرجبان',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            12 => 
            array (
                'city_id' => 13,
                'city_name' => 'الرياينة',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            13 => 
            array (
                'city_id' => 14,
                'city_name' => 'الرياينة',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            14 => 
            array (
                'city_id' => 15,
                'city_name' => 'أوجله',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            15 => 
            array (
                'city_id' => 16,
                'city_name' => 'الزنتان',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            16 => 
            array (
                'city_id' => 17,
                'city_name' => 'بني وليد',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            17 => 
            array (
                'city_id' => 18,
                'city_name' => 'بنغازي',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            18 => 
            array (
                'city_id' => 19,
                'city_name' => 'بن جواد',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            19 => 
            array (
                'city_id' => 20,
                'city_name' => 'براك',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            20 => 
            array (
                'city_id' => 21,
                'city_name' => 'درج',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            21 => 
            array (
                'city_id' => 22,
                'city_name' => 'درنة',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            22 => 
            array (
                'city_id' => 23,
                'city_name' => 'غدامس',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            23 => 
            array (
                'city_id' => 24,
                'city_name' => 'امساعد',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            24 => 
            array (
                'city_id' => 25,
                'city_name' => 'قصر خيار',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            25 => 
            array (
                'city_id' => 26,
                'city_name' => 'غريان',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            26 => 
            array (
                'city_id' => 27,
                'city_name' => 'غات',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            27 => 
            array (
                'city_id' => 28,
                'city_name' => 'القريات',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            28 => 
            array (
                'city_id' => 29,
                'city_name' => 'هون',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            29 => 
            array (
                'city_id' => 30,
                'city_name' => 'جالو',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            30 => 
            array (
                'city_id' => 31,
                'city_name' => 'مصراته',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            31 => 
            array (
                'city_id' => 32,
                'city_name' => 'مرزق و عتبة',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            32 => 
            array (
                'city_id' => 33,
                'city_name' => 'مرادة',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            33 => 
            array (
                'city_id' => 34,
                'city_name' => 'مسلاته',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            34 => 
            array (
                'city_id' => 35,
                'city_name' => 'نالوت',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            35 => 
            array (
                'city_id' => 36,
                'city_name' => 'أم اﻷرانب',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            36 => 
            array (
                'city_id' => 37,
                'city_name' => 'رأس لانوف',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            37 => 
            array (
                'city_id' => 38,
                'city_name' => 'سبها',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            38 => 
            array (
                'city_id' => 39,
                'city_name' => 'سرت',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            39 => 
            array (
                'city_id' => 40,
                'city_name' => 'شحات',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            40 => 
            array (
                'city_id' => 41,
                'city_name' => 'الشعواء',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            41 => 
            array (
                'city_id' => 42,
                'city_name' => 'صبراته',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            42 => 
            array (
                'city_id' => 43,
                'city_name' => 'سوسة',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            43 => 
            array (
                'city_id' => 44,
                'city_name' => 'ترهونه',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            44 => 
            array (
                'city_id' => 45,
                'city_name' => 'طبرق',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            45 => 
            array (
                'city_id' => 46,
                'city_name' => 'طبرق',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            46 => 
            array (
                'city_id' => 47,
                'city_name' => 'طرابلس',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            47 => 
            array (
                'city_id' => 48,
                'city_name' => 'أوباري',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            48 => 
            array (
                'city_id' => 49,
                'city_name' => 'حقل الفيل أوباري',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            49 => 
            array (
                'city_id' => 50,
                'city_name' => 'يفرن',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            50 => 
            array (
                'city_id' => 51,
                'city_name' => 'زليتن',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            51 => 
            array (
                'city_id' => 52,
                'city_name' => 'زوارة',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
            52 => 
            array (
                'city_id' => 53,
                'city_name' => 'زويلة',
                'created_at' => '2026-02-16 21:39:52',
                'updated_at' => '2026-02-16 21:39:52',
            ),
        ));
        
        
    }
}