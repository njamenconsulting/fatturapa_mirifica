<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fattura;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use \Taocomp\Einvoicing\FatturaElettronica;

class FatturaController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    //
    public function create()
    {
        return view("fattura_create_form");
    }
    public function edit()
    {
        $id = rand(1, 9);
        return view('fattura_edit_form')->with('fattura', Fattura::findOrFail($id));
    }
    public function store(Request $request)
    {
        $input = $request->all();

        //Create a custom template invoice to be used later
        $prefixPath = storage_path('app/public');
        $filename = date("d-m-Y")."-".time().'.xml';
        $invoice = new FatturaElettronica('FPA12');
        $invoice->setValue('ProgressivoInvio', 10001);
        $invoice->setValue('CodiceDestinatario', '999999');

        $invoice->setValues('IdTrasmittente', array(
            'IdCodice' => $request->input('IdCodice', '00001'),
            'IdPaese' => $request->input('IdPaese', 'IT')
        ));
        $invoice->setValues('CedentePrestatore', array(
            'IdPaese' => 'IT',
            'IdCodice' => '02313821007',
            'Denominazione' => 'CEDENTE SRL',
            'RegimeFiscale' => 'RF19',
        ));
        $invoice->setValues('CedentePrestatore/Sede', array(
            'Indirizzo' => 'VIA UNIVERSO 1',
            'CAP' => '20100',
            'Comune' => 'TRENTO',
            'Provincia' => 'TN',
            'Nazione' => 'IT'
        ));
        $invoice->setValues('CessionarioCommittente', array(
            'CodiceFiscale' => '02313821007',
            'Anagrafica/Denominazione' => 'AMMINISTRAZIONE',
        ));
        $invoice->setValues('CessionarioCommittente/Sede', array(
            'Indirizzo' => 'VIALE MONDO 99',
            'CAP' => '20100',
            'Comune' => 'TRENTO',
            'Provincia' => 'TN',
            'Nazione' => 'IT'
        ));
        $invoice->setValues('DatiGeneraliDocumento', array(
            'TipoDocumento' => 'TD01',
            'Divisa' => 'EUR',
            'Data' => '2018-12-12',
            'Numero' => 99999
        ));
        $invoice->setValuesToAll('DatiGenerali', array(
            'RiferimentoNumeroLinea' => 1,
            'IdDocumento' => 4455,
            'NumItem' => 1
        ));
        $invoice->setValues('DatiTrasporto', array(
            'IdPaese' => 'IT',
            'IdCodice' => '11223344556',
            'Denominazione' => 'TRASPORTO SRLS',
            'DataOraConsegna' => '2017-01-10T16:46:12.000+02:00'
        ));
        $invoice->setValues('DatiBeniServizi', array(
            'NumeroLinea' => 1,
            'Descrizione' => 'Description',
            'Quantita' => '10.00',
            'PrezzoUnitario' => '5.00',
            'PrezzoTotale' => '50.00',
            'DettaglioLinee/AliquotaIVA' => '22.00',
            'DatiRiepilogo/AliquotaIVA' => '22.00',
            'ImponibileImporto' => '50.00',
            'Imposta' => '11.00',
            'EsigibilitaIVA' => 'D'
        ));
        $invoice->setValues('DatiPagamento', array(
            'CondizioniPagamento' => 'TP01',
            'ModalitaPagamento' => 'MP01',
            'DataScadenzaPagamento' => '2018-12-31',
            'ImportoPagamento' => '61.00'
        ));

        $invoice->setFilename($filename);
        $invoice->setPrefixPath($prefixPath)->save();

        return view("fattura_menu")->with('filename',$filename);
    }
    //
    public function  download($filename)
    {
        $file = Storage::disk('public')->get($filename);

        return (new Response($file, 200))
            ->header('Content-Type', 'application/xml');
    }
}
