<?php

namespace App\Repositories;
use App\Models\Invoice;
use App\Models\Dettagliolinee;
use Illuminate\Support\Facades\DB;

class InvoiceRepository implements InvoiceRepositoryInterface
{
    protected $model;
    /**
     * InvoiceRepository constructor
     * 
     * @param Invoice $invoice
     */
    public function  __construct(Invoice $invoice)
    {
        $this->model = $invoice;
    }
    /**
     * Store data into the database
     * 
     * @param $data
     */
    public function store($data)
    {
        
       // $NumeroLinea = Array(); 
        $NumeroLinea = $data['NumeroLinea'];unset($data['NumeroLinea']);
        $Descrizione = $data['Descrizione'];unset($data['Descrizione']);
        $Quantita = $data['Quantita'];unset($data['Quantita']);
        $PrezzoUnitario = $data['PrezzoUnitario'];unset($data['PrezzoUnitario']);
        $PrezzoTotale = $data['PrezzoTotale'];unset($data['PrezzoTotale']);
        $AliquotaIVA = $data['AliquotaIVA'];unset($data['AliquotaIVA']);
        //Begin transaction
        $newInvoiceIntance = Invoice::create($data);
      
        $newDettagliolinee = Array();
        //
        for($i=0; $i < count($Quantita) ;$i++)
        {
            $newDettagliolinee['NumeroLinea'] = $NumeroLinea[$i];
            $newDettagliolinee['Descrizione'] = $Descrizione[$i];
            $newDettagliolinee['Quantita'] = $Quantita[$i];
            $newDettagliolinee['PrezzoUnitario'] = $PrezzoUnitario[$i];
            $newDettagliolinee['PrezzoTotale'] = $PrezzoTotale[$i];
            $newDettagliolinee['AliquotaIVA'] = $AliquotaIVA[$i];
            $newDettagliolinee['invoice_id'] = $newInvoiceIntance->id;//the id of newly created model instance
            
            $newDettagliolineeIntance = Dettagliolinee::create($newDettagliolinee);
        }
       //End transaction
        return $newInvoiceIntance->id;

    }
    /**
     * Retrieve data from the database
     * 
     * @param $id
     */
    public function getInvoice($id)
    {
        //Get invoice by id
        $invoice = Invoice::find($id)->toArray();
        //Get all Dettagliolinees who belong to Invoice
        $Dettagliolinees = Dettagliolinee::where('invoice_id', $id)
                                            ->select('NumeroLinea','Descrizione','Quantita','PrezzoUnitario','PrezzoTotale','AliquotaIVA')
                                            ->get()
                                            ->toArray();
        //Add all entries of Dettagliolinees in Invoice array
        for ($i=0; $i < count($Dettagliolinees) ; $i++) { 
            $invoice['NumeroLinea'][$i] = $Dettagliolinees[$i]['NumeroLinea'];
            $invoice['Descrizione'][$i] = $Dettagliolinees[$i]['Descrizione'];
            $invoice['Quantita'][$i] = $Dettagliolinees[$i]['Quantita'];
            $invoice['PrezzoUnitario'][$i] = $Dettagliolinees[$i]['PrezzoUnitario'];
            $invoice['PrezzoTotale'][$i] = $Dettagliolinees[$i]['PrezzoTotale'];
            $invoice['AliquotaIVA'][$i] = $Dettagliolinees[$i]['AliquotaIVA'];
        }

        return $invoice;
    }
    //
}
   