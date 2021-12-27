<?php

namespace App\Http\Controllers;

use App\Mail\FatturaMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail($attachfile)
    {

        $details = [
            'title'=> 'XML invoice generated',
            'body'=>'Hello ! download in your XML format invoice in file attachment',
            'filename'=> $attachfile
        ];
        Mail::to("njamenyves@gmail.com")->send(new FatturaMail($details));

        return view('emails/fattura_send_success');
    }
}
