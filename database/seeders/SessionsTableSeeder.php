<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SessionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sessions')->delete();
        
        \DB::table('sessions')->insert(array (
            0 => 
            array (
                'id' => 'lAZuYsd67zK9eFBkYwzxISZ7MFqhlF8OBbZPEgtt',
                'user_id' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0',
                'payload' => 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieVAzZTFybms1MTVQS0k2aU9SS2xLRDY4R0FuVWx2bjVnMXNFNFhnSyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjMxOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvZGFzaGJvYXJkIjtzOjU6InJvdXRlIjtzOjk6ImRhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
                'last_activity' => 1788725658,
            ),
            1 => 
            array (
                'id' => 'ct97KHmLU2AmIJhoFxfEq21kqV9WQwssUY0czbm2',
                'user_id' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0',
                'payload' => 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSGo0cjR3M3VUYVkyTXFHZmF5NzFlRko0dGh5eUpidFJwS2ZscGJwWiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
                'last_activity' => 1788725658,
            ),
            2 => 
            array (
                'id' => 'OkYPkioyei6Ihn3JGDJYTSUuOnP4M96b6G7Jsqmx',
                'user_id' => 1,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0',
                'payload' => 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOGxyYXFFSHFab2Nja1Y4NEJmd2pWaGpGQW95a2htOFdaaW5ITDBFZiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kYXNoYm9hcmQiO3M6NToicm91dGUiO3M6OToiZGFzaGJvYXJkIjt9czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==',
                'last_activity' => 1788728565,
            ),
            3 => 
            array (
                'id' => 'SHWny6IQXbfVrmqC7CO72MkXMz13Ax1DDfyrKqyp',
                'user_id' => 1,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:109.0) Gecko/20100101 Firefox/115.0',
                'payload' => 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZFkzQW5TbEJZVVBubVZnb1F6dDRyTzdKN0ZzbHVBanl0bXBWWVhldCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7czo1OiJyb3V0ZSI7czo5OiJob21lSW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=',
                'last_activity' => 1788701803,
            ),
            4 => 
            array (
                'id' => 'tvFKBDoiZGHC5BtGUwJtTKWZ0ucKm93XbRqRxcDs',
                'user_id' => 1,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0',
                'payload' => 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoielN3YVBIVjFlejJEcVhBUm02UWZmY1Jvckl6NU1QVmJQZ2FKQ1F1dSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kYXNoYm9hcmQiO3M6NToicm91dGUiO3M6OToiZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==',
                'last_activity' => 1788785984,
            ),
            5 => 
            array (
                'id' => 'JlA0NLHfFNDUcCcZfmMt7lE59MWjAuhorHYl0Boy',
                'user_id' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0',
                'payload' => 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY2R5OGNpR1NVekZVcFZlNGFZUFNVSmRvWkNudHJJbUFIQlJHQXFUQiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvbG9naW4iO3M6NToicm91dGUiO3M6NToibG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',
                'last_activity' => 1788812176,
            ),
            6 => 
            array (
                'id' => 'kbxiExGuMUBGq7unQbYP3iZgcSVlG1DyndH3CitZ',
                'user_id' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0',
                'payload' => 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNFFDZ3VtMzdiT21lV0dLUldIMkxUdlJvYWdEa0J5MnJ5cVZnVjF2TCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7czo1OiJyb3V0ZSI7czo5OiJob21lSW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',
                'last_activity' => 1788893332,
            ),
        ));
        
        
    }
}