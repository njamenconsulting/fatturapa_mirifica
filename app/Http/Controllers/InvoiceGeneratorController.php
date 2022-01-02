<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fattura;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Services\InvoiceGeneratorService;// Our custom service
use App\Repositories\InvoiceRepositoryInterface;
use Illuminate\Support\Arr;


class InvoiceGeneratorController extends Controller
{
    public function create()
    {
        return view('invoices.invoice_create_form');
    }
    /**
     * @var
     */
    public function edit()
    {
        //Generate fake data to fill out the form
        $data = (new InvoiceGeneratorService()) -> setFakerData();
       
        return view('invoices.invoice_edit_form')->with('data', $data);
    }
    /**
     * 
     */
    public function check(Request $request)
    {
        
        $input = $request->except(['_token','submit']);// Retrieve all form input

        if (!$request->filled('filename')) {
            $input['filename' ]  ='IT'.date("dmY")."".time().'.xml';
        }
        
        session()->put('invoice', $input);
        
        $request->flash();
        //Generate xml content from form input data
        $xmlContents = (new InvoiceGeneratorService()) -> getXmlInvoice($input);
        //Return view with xml contents generated
        return view('invoices.invoice_check')->with('contents',$xmlContents);

    }
    //
    public function  download( Request $request,
                               InvoiceRepositoryInterface $invoiceRepository,
                               $filename)
    {
        if (session()->exists('invoice')) {
            //Retrieve session data
            $sessionData = session('invoice');
            //Store into the database
            $invoiceRepository->store($sessionData);
            //delete session
            session()->forget('invoice');

            //Launch downloading
            $filename =  storage_path('app/public/').''.$filename;
       
            $headers = array(
                'Content-Type' => 'application/xml', //mime_content_type( $file )
            );
            $name = pathinfo($filename,PATHINFO_FILENAME);
            return response()->download($filename, $name, $headers);
        }
        else{
            echo 'la session not exist';
        }


    }

}
