<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Subscriber;
use Hash;

class VisitorSubscribed extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(private Subscriber $subscriber)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Thank you for your interest in Breezy\'s Books!',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $hash = base64_encode(Hash::make($this->subscriber->id));
        $id = $this->subscriber->id;

        $link = config('app.url') . "/confirm/$id/$hash";

        return new Content(
            markdown: 'mail.subscribed',
            with: [ 'topics' => $this->subscriber->topics,
                'link' => $link
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
