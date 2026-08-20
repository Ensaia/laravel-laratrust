<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class LoginEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $user_id;
    public $name;
    public $email;
    public $ip_address;
    /**
     * Create a new event instance.
     */
    public function __construct($user_id,$name,$email,$ip_address)
    {
        $this->user_id = $user_id;
        $this->name = $name;
        $this->email = $email;
        $this->ip_address = $ip_address;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
