<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use App\Observers\PostObserver;
use App\Observers\UserObserver;
use App\Observers\RolerObserver;
use Illuminate\Pagination\Paginator;
use App\Observers\PermissionObserver;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Auth\Notifications\ResetPassword; // Import this

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive(); // Set default to Bootstrap 5
        Post::observe(PostObserver::class);
        User::observe(UserObserver::class);
        Role::observe(RolerObserver::class);
        Permission::observe(PermissionObserver::class);
        $this->bootAuth();
        $this->bootRoute();
    }
    public function bootAuth()
    {
        ResetPassword::createUrlUsing(function (object $notifiable, string $token) {
            return env('APP_URL') . '/reset-password?token=' . $token . '&email=' . urlencode($notifiable->getEmailForPasswordReset());
        });
    }

    public function bootRoute()
    {
        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(10);
        });
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(30);
        });

    }
}
