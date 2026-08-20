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
                'id' => '8WavRwV3eVWTWVDiAka4a3bMTBP7Ilg3xoeEjHzs',
                'user_id' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0',
                'payload' => 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQzNGem9DSjdPSnFaUXgyTTRTdXk2SFd1UXp5U2oyWEppV01HdHp0ciI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7czo1OiJyb3V0ZSI7czo5OiJob21lSW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',
                'last_activity' => 1777232750,
            ),
            1 => 
            array (
                'id' => '05fq6IqC81DRPuvPNCCpB0QVlCiR3VdWVoQUeo0O',
                'user_id' => 1,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0',
                'payload' => 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoia0djZXRpTGNJS3pURVB2UmFSMFNJREhxVVVhc3pjYnZJVnF2bXFyZyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hcGkvdXNlcnMtY291bnQiO3M6NToicm91dGUiO3M6MTA6InVzZXJzQ291bnQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjY0OiJkODAxOWMwZmZhM2JjZTBiOTRlYTBjM2VlODM2NjU1YTQ5ZDNlY2QwYWQzOTkwMjE1OGVjZDgxYmM1M2YxNzljIjt9',
                'last_activity' => 1778876613,
            ),
            2 => 
            array (
                'id' => 'DySET78mRYOSg8HH1vzUsgh3WLZWnlRFm85xVrjr',
                'user_id' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0',
                'payload' => 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM05FVUdtekQ2VWd4YjBLUDlNaWZsWVVXRUdkZ0R0ckI4VmZ4RlJQSiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7czo1OiJyb3V0ZSI7czo5OiJob21lSW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',
                'last_activity' => 1779442299,
            ),
            3 => 
            array (
                'id' => 'D8mPeltE9B6j6pJ0OuSalCwI8F5tisWh53dOQj8h',
                'user_id' => 1,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0',
                'payload' => 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTjlXVHZJQTBrRXJ0Z3VrZEd0YWZVVHFGY3JValdVdnVWeURCTDZGYyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kYXNoYm9hcmQvdXNlcnM/cGFnZT0yIjtzOjU6InJvdXRlIjtzOjEwOiJ1c2Vyc0luZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2NDoiZDgwMTljMGZmYTNiY2UwYjk0ZWEwYzNlZTgzNjY1NWE0OWQzZWNkMGFkMzk5MDIxNThlY2Q4MWJjNTNmMTc5YyI7fQ==',
                'last_activity' => 1779457058,
            ),
            4 => 
            array (
                'id' => 'mUQus47idpsZwZbAfG2c1QVAuJb5raEp0Lyw9sj9',
                'user_id' => 1,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0',
                'payload' => 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOTI3NW53Nks4V0tkbUhweXppWUdKTVhpekVPQlhVOUtRdHFDOURyUSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjYwOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvZGFzaGJvYXJkL3ByYXllci10aW1lLWRlZmF1bHQtc2V0dGluZ3MiO3M6NToicm91dGUiO3M6MzA6InByYXllclRpbWVEZWZhdWx0U2V0dGluZ3NJbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==',
                'last_activity' => 1779464524,
            ),
        ));
        
        
    }
}