<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\GetFakerDataHelper;
use App\Services\XmlGeneratorService as XmlInvoice;
use App\Services\InvoiceDownloadingService as IDownload;
use App\Repositories\InvoiceRepositoryInterface as IRepository;

class InvoiceController extends Controller
{
    /**
     * @var $_xmlcontents
     */
    protected $_xmlcontents;
    /**
     * Show view with empty form to create new invoice
     */
    public function create()
    {
        return view('invoices.invoice_create_form');
    }
    /**
     * Show view with filled out form to create new invoice
     */
    public function edit()
    {
        //Generate fake data to fill out the form
        $data = GetFakerDataHelper::getFakerData();
       
        return view('invoices.invoice_edit_form')->with('data', $data);
    }
    /**
     * Show filled out data form in XML format 
     * 
     * @param \Illuminate\Http\Request $request
     */
    public function check(Request $request)
    {
        //Retrieve form inputs 
        $input = $request->except(['_token','submit']);
        //Store form inputs in the session using flash method for keep fill out values when go back
        $request->flash();
        session()->put('invoice', $input);
        
        //Generate xml content from form input data using the setter
        $this->setXmlcontents($input);
        $xmlContents = $this->getXmlcontents();
        //Return view with xml contents generated
        return view('invoices.invoice_check')->with('contents',$xmlContents);
    }
    /**
     * Store a newly created invoice into database
     * 
     * @param App\Repositories\InvoiceRepositoryInterface $invoiceRepository
     */
    public function store(IRepository $invoiceRepository)
    {
        if (session()->exists('invoice')) {

            //Retrieve session data
            $sessionData = session('invoice');
            $filename ='IT'.date("dmY")."".time().'.xml';
            $sessionData['filename' ] = $filename;

            //Store into the database and get inserted model instance who is returned
            $insertedInvoiceInstance = $invoiceRepository->store($sessionData);
            $id = $insertedInvoiceInstance['id'];

            //Delete session
            session()->forget('invoice');

            return view('invoices.invoice_menu_action')->with('id',$id);
        }
        else return redirect()->route('invoiceCreate');//->with('flashMessage',$flashMessage)
    }
    /**
     * 
     */
    public function download(IRepository $invoiceRepository, $id)
    {  
        if ($id) {
            //Retrieve data from database
            $data = $invoiceRepository->get($id);
            //IDownload::downloadInvoice($sessionData);
            $filepath =  storage_path('app/public/').''.$data['filename'];
            //Create file on disk
            $file = fopen ($filepath, 'w') or die ("Unable to open file");
            //fclose($file);
            //Build XML file from retrieved data
            $xmlContents = $this->setXmlcontents($data); 
            //Put builded contents in created file previously
            file_put_contents($filepath,$xmlContents);
            //
            $headers = array(
                'Content-Type' => 'application/xml', //mime_content_type( $file )
            );
            //G
            $name = pathinfo($filepath,PATHINFO_FILENAME);
            
            return response()->download($filepath, $name, $headers);
        }

        else echo 'Flash eest finie';
    }
    /**
     * Get $_xmlcontents
     */
    public function getXmlcontents()
    {
        return $this->_xmlcontents;
    }
    /**
     * Set $_xmlcontents
     */
    public function setXmlcontents($array)
    {
        //Generate xml content from form input data    
        return $this->_xmlcontents = XmlInvoice::XmlGenerator($array); 
    }
}
