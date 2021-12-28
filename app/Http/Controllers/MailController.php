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
        /*
        $validatedData = $request->validate([
            'mailTo' => ['bail','required', 'email', 'max:255'],
            'mailCc' => ['bail','nullable', 'email', 'max:255'],
            //'mailFrom' => ['bail','required', 'email', 'max:255'],
            'mailSubject' => ['required', 'unique:posts', 'max:255'],
            'mailTitle' => ['nullable'],
            'mailMessage' => ['required'],
        ]); */

        $recipientAddress = $request->input('mailTo');
        $ccAddress = $request->input('mailCc');
        $senderAddress=$request->input('mailFrom');
        $details = [
            'subject'=>$request->input('mailSubject'),
            'title'=> $request->input('mailTitle'),
            'body'=>$request->input('mailMessage'),
            'filename'=> $request->input('mailAttachment'),
        ];
        Mail::to($recipientAddress)->cc($ccAddress)
                                   ->send(new FatturaMail($details));

        return view('emails/mail_success_message');
    }
}
