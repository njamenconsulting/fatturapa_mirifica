<?php
namespace App\Services;

use \Taocomp\Einvoicing\FatturaElettronica;

class XmlGeneratorService
{
    public static function XmlGenerator($array)
    {
            //Create a custom template invoice to be used later

            $invoice = new FatturaElettronica('FPA12');

            $invoice->setValue('ProgressivoInvio', $array['ProgressivoInvio']);
            $invoice->setValue('CodiceDestinatario',  $array['CodiceDestinatario']);

            $invoice->setValues('IdTrasmittente', array(
                'IdCodice' => $array['IdCodice'],
                'IdPaese' => $array['IdPaese']
            ));
            $invoice->setValues('CedentePrestatore', array(
                'IdPaese' => $array['IdPaese2'],
                'IdCodice' => $array['IdCodice2'],
                'Denominazione' => $array['Denominazione'],
                'RegimeFiscale' => $array['RegimeFiscale'],
            ));
            $invoice->setValues('CedentePrestatore/Sede', array(
                'Indirizzo' => $array['Indirizzo'],
                'CAP' => $array['CAP'],
                'Comune' => $array['Comune'],
                'Provincia' => $array['Provincia'],
                'Nazione' => $array['Nazione']
            ));
            $invoice->setValues('CessionarioCommittente', array(
                'CodiceFiscale' => $array['CodiceFiscale'],
                'Anagrafica/Denominazione' => $array['Denominazione2'],
            ));
            $invoice->setValues('CessionarioCommittente/Sede', array(
                'Indirizzo' => $array['Indirizzo2'],
                'CAP' => $array['CAP2'],
                'Comune' => $array['Comune2'],
                'Provincia' => $array['Provincia2'],
                'Nazione' => $array['Nazione2']
            ));
            $invoice->setValues('DatiGeneraliDocumento', array(
                'TipoDocumento' => $array['TipoDocumento'],
                'Divisa' => $array['Divisa'],
                'Data' => $array['Data'],
                'Numero' => $array['Numero'],
                'Causale' => $array['Causale'],
            ));
            $invoice->setValuesToAll('DatiGenerali', array(
                'RiferimentoNumeroLinea' => $array['RiferimentoNumeroLinea'],
                'IdDocumento' => $array['IdDocumento'],
                'NumItem' => $array['NumItem'],
                'CodiceCUP' => $array['CodiceCUP'],
                'CodiceCIG' => $array['CodiceCIG']
            ));
            $invoice->setValues('DatiTrasporto', array(
                'IdPaese' => $array['IdPaese3'],
                'IdCodice' => $array['IdCodice3'],
                'Denominazione' => $array['Denominazione3'],
                'DataOraConsegna' => $array['DataOraConsegna'],
            ));
            $invoice->setValues('DatiBeniServizi', array(
                'NumeroLinea' => $array['NumeroLinea'],
                'Descrizione' => $array['Descrizione'],
                'Quantita' => $array['Quantita'],
                'PrezzoTotale' => $array['PrezzoTotale'],
                'DettaglioLinee/AliquotaIVA' => $array['AliquotaIVA'],
                'DatiRiepilogo/AliquotaIVA' => $array['AliquotaIVA2'],
                'ImponibileImporto' => $array['ImponibileImporto'],
                'Imposta' => $array['Imposta'],
                'EsigibilitaIVA' => $array['EsigibilitaIVA']
            ));
            $invoice->setValues('DatiPagamento', array(
                'CondizioniPagamento' => $array['CondizioniPagamento'],
                'ModalitaPagamento' => $array['ModalitaPagamento'],
                'DataScadenzaPagamento' => $array['DataScadenzaPagamento'],
                'ImportoPagamento' => $array['ImportoPagamento']
            ));

             $xml = $invoice->asXML();
          
            return $xml;
    }
}