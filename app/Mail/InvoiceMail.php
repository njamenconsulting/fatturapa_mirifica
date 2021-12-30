<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details=$details;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $file = Storage::disk('public')->get($this->details['filename']);

        return $this->subject($this->details['subject'])
                    ->view('emails.mail_template_content')
                    ->attachData($file, $this->details['filename'], ['mime' => 'application/xml']);
    }
}
