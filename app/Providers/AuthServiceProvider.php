<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
            return (new MailMessage)
                ->subject('تأكيد عنوان بريدك الإلكتروني') // Arabic: Verify Your Email Address
                ->line('الرجاء النقر فوق الزر أدناه للتحقق من عنوان بريدك الإلكتروني.') // Arabic: Please click the button below to verify your email address.
                ->action('تأكيد عنوان البريد الإلكتروني', $url) // Arabic: Verify Email Address (button text)
                ->line('إذا لم تطلب التحقق من البريد الإلكتروني، فتجاهل هذا البريد الإلكتروني.'); // Arabic: If you did not request an email verification, please ignore this email.
        });
    }
}
