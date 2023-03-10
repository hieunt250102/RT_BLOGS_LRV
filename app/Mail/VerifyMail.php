<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VerifyMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    private $token_verify;
    private $time_create;
    /**
     * Create a new message instance.
     */
    public function __construct($token_verify, $time_create)
    {
        $this->token_verify = $token_verify;
        $this->time_create = $time_create;
        $this->queue = 'verify';
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Verify Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.verify',
            with: [
                'token_verify' => $this->token_verify,
                'time_create' => strtotime($this->time_create),
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
