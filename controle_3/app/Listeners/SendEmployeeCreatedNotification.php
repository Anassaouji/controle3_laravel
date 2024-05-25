<?php

namespace App\Listeners;

use App\Events\EmployeeCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class SendEmployeeCreatedNotification
{
    /**
     * Handle the event.
     *
     * @param  \App\Events\EmployeeCreated  $event
     * @return void
     */
    public function handle(EmployeeCreated $event)
    {
        Session::flash('status', 'Event EmployeeCreated handled for employee: ' . $event->employe->nom);
    }
}
