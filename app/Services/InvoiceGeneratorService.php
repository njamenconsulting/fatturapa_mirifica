<?php
namespace App\Services;

use \Taocomp\Einvoicing\FatturaElettronica;

    class InvoiceGeneratorService 
    {
        public function getXmlInvoice($request)
        {

            //Create a custom template invoice to be used later
            $prefixPath = storage_path('app/public');
            $filename = 'IT'.date("dmY")."".time().'.xml';

            $invoice = new FatturaElettronica('FPA12');

            $invoice->setValue('ProgressivoInvio', 10001);
            $invoice->setValue('CodiceDestinatario', '999999');

            $invoice->setValues('IdTrasmittente', array(
                'IdCodice' => $request->input('IdCodice', '00001'),
                'IdPaese' => $request->input('IdPaese', 'IT')
            ));
            $invoice->setValues('CedentePrestatore', array(
                'IdPaese' => $request->input('IdPaese2', 'IT'),
                'IdCodice' => $request->input('IdCodice2', '00001'),
                'Denominazione' => $request->input('Denominazione', 'ALPHA SRL'),
                'RegimeFiscale' => $request->input('RegimeFiscale', 'RF19'),
            ));
            $invoice->setValues('CedentePrestatore/Sede', array(
                'Indirizzo' => $request->input('Indirizzo', 'VIALE ROMA 543'),
                'CAP' => $request->input('CAP', '07100'),
                'Comune' => $request->input('Comune', 'SASSARI'),
                'Provincia' => $request->input('Provincia', 'SS'),
                'Nazione' => $request->input('Nazione', 'IT')
            ));
            $invoice->setValues('CessionarioCommittente', array(
                'CodiceFiscale' => $request->input('CodiceFiscale', '09876543210'),
                'Anagrafica/Denominazione' => $request->input('Denominazione2', 'AMMINISTRAZIONE BETA'),
            ));
            $invoice->setValues('CessionarioCommittente/Sede', array(
                'Indirizzo' => $request->input('Indirizzo2', 'VIA TORINO 38-B'),
                'CAP' => $request->input('CAP2', '00145'),
                'Comune' => $request->input('Comune2', 'ROMA'),
                'Provincia' => $request->input('Provincia2', 'RM'),
                'Nazione' => $request->input('Nazione2', 'IT')
            ));
            $invoice->setValues('DatiGeneraliDocumento', array(
                'TipoDocumento' => $request->input('TipoDocumento', 'TD01'),
                'Divisa' => $request->input('Divisa', 'EUR'),
                'Data' => $request->input('Data', '2017-01-18'),
                'Numero' => $request->input('Numero', '123'),
                'Causale' => $request->input('Causale', 'loren ipsum deblore123'),
            ));
            $invoice->setValuesToAll('DatiGenerali', array(
                'RiferimentoNumeroLinea' => $request->input('RiferimentoNumeroLinea', '1'),
                'IdDocumento' => $request->input('IdDocumento', '66685'),
                'NumItem' => $request->input('NumItem', '1'),
                'CodiceCUP' => $request->input('CodiceCUP', '123abc'),
                'CodiceCIG' => $request->input('CodiceCIG', '456def')
            ));
            $invoice->setValues('DatiTrasporto', array(
                'IdPaese' => $request->input('IdPaese3'),
                'IdCodice' => $request->input('IdCodice3'),
                'Denominazione' => $request->input('Denominazione3'),
                'DataOraConsegna' => $request->input('DataOraConsegna'),
            ));
            $invoice->setValues('DatiBeniServizi', array(
                'NumeroLinea' => $request->input('NumeroLinea'),
                'Descrizione' => $request->input('Descrizione'),
                'Quantita' => $request->input('Quantita'),
                'PrezzoTotale' => $request->input('PrezzoTotale'),
                'DettaglioLinee/AliquotaIVA' => $request->input('AliquotaIVA'),
                'DatiRiepilogo/AliquotaIVA' => $request->input('AliquotaIVA2'),
                'ImponibileImporto' => $request->input('ImponibileImporto'),
                'Imposta' => $request->input('Imposta'),
                'EsigibilitaIVA' => $request->input('EsigibilitaIVA')
            ));
            $invoice->setValues('DatiPagamento', array(
                'CondizioniPagamento' => $request->input('CondizioniPagamento'),
                'ModalitaPagamento' => $request->input('ModalitaPagamento'),
                'DataScadenzaPagamento' => $request->input('DataScadenzaPagamento'),
                'ImportoPagamento' => $request->input('ImportoPagamento')
            ));

            $invoice->setFilename($filename);

            $invoice->setPrefixPath($prefixPath)->save();   
            
            return $filename;

        }
    }
