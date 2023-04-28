<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $message;

    /**
     * Create a new message instance.
     *
     * @param array $validatedData
     * @return void
     */
    public function __construct(array $validatedData)
    {
        $this->name = $validatedData['name'];
        $this->email = $validatedData['email'];
        $this->message = $validatedData['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)
            ->subject('Contact Form Submission')
            ->markdown('emails.contact');
    }
}
