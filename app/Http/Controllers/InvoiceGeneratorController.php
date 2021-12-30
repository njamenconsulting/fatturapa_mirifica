<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fattura;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Services\InvoiceGeneratorService;// Our custom service


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
        $id = rand(1, 9);
        return view('invoices.invoice_edit_form')->with('fattura', Fattura::findOrFail($id));
    }
    /**
     * 
     */
    public function check(Request $request)
    {
        $input = $request->all();// Retrieve all form input
        // flash the current input to the session so that it is available during the user's next request to the application
        $request->flash();
        //xmlInvoiceBuilder($filename)
        $filename = (new InvoiceGeneratorService()) -> getXmlInvoice($request);
    
        $invoice_contents = Storage::disk('public')->get($filename);

        $content_file=(new Response($invoice_contents, 200))->header('Content-Type', 'application/xml');

        return view('invoices.invoice_check')->with('filename',$filename)
                                            ->with('content',$content_file);

    }
    //
    public function  download($filename)
    {

        $filename =  storage_path('app/public/').''.$filename;
       
        $headers = array(
            'Content-Type' => 'application/xml', //mime_content_type( $file )
          );
        $name = pathinfo($filename,PATHINFO_FILENAME);
        return response()->download($filename, $name, $headers);
    }

}
