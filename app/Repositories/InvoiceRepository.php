<?php

namespace App\Repositories;
use App\Models\Invoice;

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
        $newInvoiceIntance = Invoice::create($data);

        return $newInvoiceIntance->toArray();

    }
    /**
     * Retrieve data from the database
     * 
     * @param $id
     */
    public function get($id)
    {
        if ($id):
           $invoice = Invoice::find($id);
        else:
           $invoice = Invoice::all();
        endif;
 
        return $invoice->toArray();
    }

}
   