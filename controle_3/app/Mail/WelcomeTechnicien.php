<?php

namespace App\Mail;

use App\Models\Technicien;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeTechnicien extends Mailable
{
    use Queueable, SerializesModels;

    public $technicien;

    /**
     * Create a new message instance.
     *
     * @param Technicien $technicien
     * @return void
     */
    public function __construct(Technicien $technicien)
    {
        $this->technicien = $technicien;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Welcome to the Company')
                    ->view('emails.welcome_technicien');
    }
}
