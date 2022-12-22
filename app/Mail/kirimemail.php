<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class kirimemail extends Mailable
{
    use Queueable, SerializesModels;
    // public $data_email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->data_email = $data_email;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        // return $this->subject($this->data_email['subject'])
        // ->from($this->data_email['sender_name']);
        // ->view('mail.kirimemail');
        return new Envelope(
            subject: 'Kirimemail',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */

    //  public function build()
    //  {
    //     return $this->subject($this->data_email['subject'])
    //                 ->from($this->data_email['sender_name'])
    //                 ->view('mail.kirimemail');
    //  }
    public function content()
    {
        return new Content(

            view: 'mail.kirimemail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
