<?php

namespace App\Events;

use App\Models\Technicien;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TechnicienCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $technicien;

    /**
     * Create a new event instance.
     *
     * @param \App\Models\Technicien $technicien
     * @return void
     */
    public function __construct(Technicien $technicien)
    {
        $this->technicien = $technicien;
    }
}
