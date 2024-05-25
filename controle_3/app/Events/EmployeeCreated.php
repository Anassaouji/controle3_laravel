<?php

namespace App\Events;

use App\Models\Employe;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EmployeeCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public $employe;

    /**
     * Create a new event instance.
     *
     * @param \App\Models\Employee $employee
     * @return void
     */
    public function __construct(Employe $employe)
    {
        $this->employe = $employe;
    }
}
