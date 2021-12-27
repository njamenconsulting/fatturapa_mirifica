<?php

namespace App\Http\Controllers;

use App\Mail\FatturaMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function writeEmail($filename)
    {
        return view('emails/mail_create_form')->with('filename',$filename);
    }
    public function sendEmail(Request $request)
    {
       $recipientAddress = $request->input('mailTo');
       $senderAddress=$request->input('mailFrom');
        $details = [
            'subject'=>$request->input('mailSubject'),
            'title'=> $request->input('mailTitle'),
            'body'=>$request->input('mailMessage'),
            'filename'=> $request->input('filename'),
        ];
        Mail::to($recipientAddress)->send(new FatturaMail($details));

        return view('emails/fattura_send_success');
    }
}
