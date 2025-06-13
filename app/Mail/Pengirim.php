<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Pengirim extends Mailable
{
   use Queueable, SerializesModels;

    public $data; // This will hold the form data

    /**
     * Create a new message instance.
     *
     * @param  array  $data
     */
    public function __construct($data)
    {
        $this->data = $data;  // Store the data passed to the class
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Terima Kasih Telah Menghubungi Kami',  // Set the email subject
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.pengirim',  // Set the email view template
            with: [
                'data' => $this->data,  // Pass the data to the view
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
