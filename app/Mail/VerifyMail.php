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
    private $tokenVerify;
    private $timeCreate;
    /**
     * Create a new message instance.
     */
    public function __construct($tokenVerify, $timeCreate)
    {
        $this->tokenVerify = $tokenVerify;
        $this->timeCreate = $timeCreate;
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
                'token_verify' => $this->tokenVerify,
                'time_create' => strtotime($this->timeCreate),
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
