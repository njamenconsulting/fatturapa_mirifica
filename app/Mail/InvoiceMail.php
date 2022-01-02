<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use App\Services\XmlGeneratorService as XmlInvoice;

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
        //Get invoice parameters who was stored into database
        $invoiceParameters = $this->details['attachment'];
        //Generated a XML in memory who will is  attached to the email without writing it to disk
        $xmlContents = XmlInvoice::XmlGenerator($invoiceParameters);//raw data bytes

        return $this->subject($this->details['subject'])
                    ->view('emails.mail_template_content')
                    ->attachData( $xmlContents, $invoiceParameters['filename'], ['mime' => 'application/xml']);
    }
}
