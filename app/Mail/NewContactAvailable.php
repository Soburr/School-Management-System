<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewContactAvailable extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct()
    {
        //
    }

    public function build () {
        return $this->view('emails.newsletter')
        ->subject('Newsletter')
        ->with(['title' => 'The latest Newsletter is available!',
                'body' => 'Click on the link below to view the latest newsletter']);
    }
}
