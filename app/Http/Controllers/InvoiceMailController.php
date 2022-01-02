<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceMail;
use App\Repositories\InvoiceRepositoryInterface as IRepository;

class InvoiceMailController extends Controller
{
    /**
     * Create new mail with file attachement
     * 
     * @param \App\Models\Invoice $id
     */
    public function writing($id)
    {
        return view('emails/mail_create_form')->with('id',$id);
    }
    /**
     * Allow to send email with file attachment
     * 
     * @param Request $request
     * @param Repository $repository
     */
    public function sending(Request $request,IRepository $invoiceRepository)
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
        
        //Retrieve data from database
        $invoice = $invoiceRepository->get($request->input('idAttachment'));
 
        $recipientAddress = $request->input('mailTo');
        $ccAddress = $request->input('mailCc');
        $senderAddress=$request->input('mailFrom');
        $details = [
            'subject'=>$request->input('mailSubject'),
            'title'=> $request->input('mailTitle'),
            'body'=>$request->input('mailMessage'),
            'attachment'=> $invoice ,
        ];
        
        Mail::to($recipientAddress)->cc($ccAddress)
                                   ->send(new InvoiceMail($details));

        return view('emails/mail_success_message',['id'=>$invoice['id']] );
    }
    //
    public function goBacktoForm()
    {
        //Retrieve session data
        $sessionData = session('invoice');
        // Go to view to create form with old filled data
        return view('invoices.invoice_edit_form')->with('data', $sessionData);
    }
}
