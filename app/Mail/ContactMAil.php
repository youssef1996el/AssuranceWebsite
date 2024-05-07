<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMAil extends Mailable
{
    use Queueable, SerializesModels;
    public $fullname;
    public $emailClient;
    public $phone;
    public $subject;
    public $Message;
    public $toEmail;
    /**
     * Create a new message instance.
     */
    public function __construct($fullname, $emailClient, $phone, $subject, $message, $toEmail)
    {
        $this->fullname = $fullname;
        $this->emailClient = $emailClient;
        $this->phone = $phone;
        $this->subject = $subject;
        $this->message = $message;
        $this->toEmail = $toEmail;
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject:  $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'Email',
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
