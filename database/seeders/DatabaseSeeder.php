<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(30)->create()->each(function ($user) {
            $user->addRole('user');
            $this->call(CacheTableSeeder::class);
            $this->call(CacheLocksTableSeeder::class);
            $this->call(FailedJobsTableSeeder::class);
            $this->call(JobBatchesTableSeeder::class);
            $this->call(JobsTableSeeder::class);
            $this->call(LoginHistoryTableSeeder::class);
            $this->call(MigrationsTableSeeder::class);
            $this->call(PasswordResetTokensTableSeeder::class);
            $this->call(PermissionRoleTableSeeder::class);
            $this->call(PermissionUserTableSeeder::class);
            $this->call(PermissionsTableSeeder::class);
            $this->call(PersonalAccessTokensTableSeeder::class);
            $this->call(PostTableSeeder::class);
            $this->call(RoleUserTableSeeder::class);
            $this->call(RolesTableSeeder::class);
            $this->call(SessionsTableSeeder::class);
            $this->call(UserActionsTableSeeder::class);
            $this->call(UsersTableSeeder::class);
            $this->call(CityTableSeeder::class);
            $this->call(DayTableSeeder::class);
            $this->call(DefaultSettingTableSeeder::class);
            $this->call(MonthTableSeeder::class);
            $this->call(PrayerTimesTableSeeder::class);
        });

        // User::factory()->create([
        //     'name' => 'user',
        //     'email' => 'user@laravel.com',
        //     'email_verified_at' => now(),
        // ]);
    }
}
