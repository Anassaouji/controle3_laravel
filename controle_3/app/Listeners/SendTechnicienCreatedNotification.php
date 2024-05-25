<?php

namespace App\Listeners;

use App\Events\TechnicienCreated;
use App\Jobs\SendWelcomeEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendTechnicienCreatedNotification
{
    /**
     * Handle the event.
     *
     * @param  \App\Events\TechnicienCreated  $event
     * @return void
     */
    public function handle(TechnicienCreated $event)
    {
        // Logique pour envoyer une notification ou afficher un message
        // Log::info('Listener SendTechnicienCreatedNotification handling event for technicien: ' . $event->technicien->name);
        SendWelcomeEmail::dispatch($event->technicien);
    }
}
