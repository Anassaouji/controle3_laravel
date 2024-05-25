<?php

namespace App\Jobs;

use App\Mail\WelcomeTechnicien;
use App\Models\Technicien;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $technicien;

    /**
     * Create a new job instance.
     *
     * @param Technicien $technicien
     * @return void
     */
    public function __construct(Technicien $technicien)
    {
        $this->technicien = $technicien;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Logique pour envoyer l'email
        Mail::to($this->technicien->email)->send(new WelcomeTechnicien($this->technicien));
    }
}
