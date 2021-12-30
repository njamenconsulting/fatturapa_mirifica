<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceMail;

class InvoiceMailController extends Controller
{
    public function writing($filename)
    {
        return view('emails/mail_create_form')->with('filename',$filename);
    }
    public function sending(Request $request)
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
                                   ->send(new InvoiceMail($details));

        return view('emails/mail_success_message');
    }
}
