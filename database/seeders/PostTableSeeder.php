<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('post')->delete();
        
        \DB::table('post')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'بيان فضل العالم على العابد',
            'content' => 'عن أبي الدرداء رضي الله عنه قال: سمعت رسول الله صلى الله عليه وسلم يقول: «إِنَّ فَضْلَ الْعَالِمِ عَلَى الْعَابِدِ كَفَضْلِ الْقَمَرِ لَيْلَةَ الْبَدْرِ عَلَى سَائِرِ الْكَوَاكِبِ» (رواه أبو داود والترمذي وابن ماجه)',
                'created_at' => '2026-08-04 11:23:11',
                'updated_at' => '2026-08-04 11:23:11',
            ),
        ));
        
        
    }
}