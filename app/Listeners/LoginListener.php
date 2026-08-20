<?php

namespace App\Listeners;

use App\Events\LoginEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;

class LoginListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(LoginEvent $event): void
    {
        $agent = new Agent();
        $time = Carbon::now()->toDateTimeString();
        $user_id = $event->user_id;
        $name = $event->name;
        $email = $event->email;
        $ip_address = $event->ip_address;
        DB::table('login_history')->insert([
            'user_id' => $user_id,
            'name' => $name,
            'email' => $email,
            'ip_address' => $ip_address,
            'browser' => $agent->browser(),
            'platform' => $agent->platform(),
            'created_at' => $time,
            'updated_at' => $time,
        ]);
    }
}
