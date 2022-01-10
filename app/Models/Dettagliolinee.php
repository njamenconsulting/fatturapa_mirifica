<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dettagliolinee extends Model
{
    use HasFactory;

    protected $fillable = ['NumeroLinea', 
                           'Descrizione', 
                           'Quantita', 
                           'PrezzoUnitario',
                           'PrezzoTotale',
                           'AliquotaIVA',
                           'invoice_id'];
    //
    public function invoice()
    {
       return $this->belongsTo(Invoice::class);
    }
}
