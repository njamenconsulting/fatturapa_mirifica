<?php
namespace App\Services;

use \Taocomp\Einvoicing\FatturaElettronica;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

    class InvoiceGeneratorService 
    {
        public function setFakerData()
        {
            $faker = Faker::create();

            return [
                        'IdPaese'=>$faker->stateAbbr(),
                        'IdCodice'=>$faker->regexify('[0-9]{10}'),
                        'ProgressivoInvio'=>$faker->regexify('[0-9]{5}'),
                        'FormatoTrasmissione'=>$faker->regexify('[A-Z]{2}[0-9]{2}'),
                        'CodiceDestinatario'=>$faker->numerify('FPA####'),
                        'IdPaese2'=>$faker->stateAbbr(),
                        'IdCodice2'=>$faker->randomNumber($nbDigits = 9, $strict = true),
                        'Denominazione'=>$faker->company(),
                        'RegimeFiscale'=>$faker->regexify('[A-Z]{2}[0-9]{2}'),
                        'Indirizzo'=>$faker->address(),
                        'CAP'=>$faker->regexify('[0-9]{5}'),
                        'Comune'=>$faker->city (),
                        'Provincia'=>$faker->citySuffix() ,
                        'Nazione'=>$faker->countryCode(),
                        'CodiceFiscale'=>$faker->randomNumber($nbDigits = 9, $strict = true) ,
                        'Denominazione2'=>$faker->company(),
                        'Indirizzo2'=>$faker->address(),
                        'CAP2'=>$faker->regexify('[0-9]{5}'),
                        'Comune2'=>$faker->city (),
                        'Provincia2'=>$faker->regexify('[A-Z]{2}'),
                        'Nazione2'=>$faker->countryCode(),
                        'TipoDocumento'=>$faker->regexify('[A-Z]{2}[0-9]{2}'),
                        'Divisa'=>$faker->currencyCode(),
                        'Data'=>$faker->date('Y-m-d'),
                        'Numero'=>$faker->regexify('[0-9]{3}'),
                        'Causale'=>$faker->sentence(),
                        'RiferimentoNumeroLinea'=>$faker->randomDigitNotNull(),
                        'IdDocumento'=>$faker->regexify('[0-9]{5}'),
                        'NumItem'=>$faker->randomDigitNotNull(),
                        'CodiceCUP'=>$faker->regexify('[0-9]{3}[a-z]{3}'),
                        'CodiceCIG'=>$faker->regexify('[a-z]{3}[0-9]{3}'),
            
                        'IdPaese3'=>$faker->stateAbbr(),
                        'IdCodice3'=>$faker->randomNumber($nbDigits = 9, $strict = true),
                        'Denominazione3'=>$faker->company(),
                        'DataOraConsegna'=>$faker->iso8601($max = 'now'),
            
                        'NumeroLinea'=>$faker->numberBetween($min = 1, $max = 20),
                        'Descrizione'=>$faker->sentence(),
                        'Quantita'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
                        'PrezzoUnitario'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
                        'PrezzoTotale'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
                        'AliquotaIVA'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
                        'AliquotaIVA2'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
                        'ImponibileImporto'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
                        'Imposta'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
                        'EsigibilitaIVA'=>$faker->regexify('[A-Z]{1}'),
                        'CondizioniPagamento'=>$faker->regexify('[A-Z]{2}[0-9]{2}'),
                        'ModalitaPagamento'=>$faker->regexify('[A-Z]{2}[0-9]{2}'),
                        'DataScadenzaPagamento'=>$faker->date('Y-m-d'),
                        'ImportoPagamento'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),

                        'filename'=>$faker->regexify('[0-9]{10}').'.xml'
                    ];

        }
        //
        public function getXmlInvoice($input)
        {

            //Create a custom template invoice to be used later

            $invoice = new FatturaElettronica('FPA12');

            $invoice->setValue('ProgressivoInvio', $input['ProgressivoInvio']);
            $invoice->setValue('CodiceDestinatario',  $input['CodiceDestinatario']);

            $invoice->setValues('IdTrasmittente', array(
                'IdCodice' => $input['IdCodice'],
                'IdPaese' => $input['IdPaese']
            ));
            $invoice->setValues('CedentePrestatore', array(
                'IdPaese' => $input['IdPaese2'],
                'IdCodice' => $input['IdCodice2'],
                'Denominazione' => $input['Denominazione'],
                'RegimeFiscale' => $input['RegimeFiscale'],
            ));
            $invoice->setValues('CedentePrestatore/Sede', array(
                'Indirizzo' => $input['Indirizzo'],
                'CAP' => $input['CAP'],
                'Comune' => $input['Comune'],
                'Provincia' => $input['Provincia'],
                'Nazione' => $input['Nazione']
            ));
            $invoice->setValues('CessionarioCommittente', array(
                'CodiceFiscale' => $input['CodiceFiscale'],
                'Anagrafica/Denominazione' => $input['Denominazione2'],
            ));
            $invoice->setValues('CessionarioCommittente/Sede', array(
                'Indirizzo' => $input['Indirizzo2'],
                'CAP' => $input['CAP2'],
                'Comune' => $input['Comune2'],
                'Provincia' => $input['Provincia2'],
                'Nazione' => $input['Nazione2']
            ));
            $invoice->setValues('DatiGeneraliDocumento', array(
                'TipoDocumento' => $input['TipoDocumento'],
                'Divisa' => $input['Divisa'],
                'Data' => $input['Data'],
                'Numero' => $input['Numero'],
                'Causale' => $input['Causale'],
            ));
            $invoice->setValuesToAll('DatiGenerali', array(
                'RiferimentoNumeroLinea' => $input['RiferimentoNumeroLinea'],
                'IdDocumento' => $input['IdDocumento'],
                'NumItem' => $input['NumItem'],
                'CodiceCUP' => $input['CodiceCUP'],
                'CodiceCIG' => $input['CodiceCIG']
            ));
            $invoice->setValues('DatiTrasporto', array(
                'IdPaese' => $input['IdPaese3'],
                'IdCodice' => $input['IdCodice3'],
                'Denominazione' => $input['Denominazione3'],
                'DataOraConsegna' => $input['DataOraConsegna'],
            ));
            $invoice->setValues('DatiBeniServizi', array(
                'NumeroLinea' => $input['NumeroLinea'],
                'Descrizione' => $input['Descrizione'],
                'Quantita' => $input['Quantita'],
                'PrezzoTotale' => $input['PrezzoTotale'],
                'DettaglioLinee/AliquotaIVA' => $input['AliquotaIVA'],
                'DatiRiepilogo/AliquotaIVA' => $input['AliquotaIVA2'],
                'ImponibileImporto' => $input['ImponibileImporto'],
                'Imposta' => $input['Imposta'],
                'EsigibilitaIVA' => $input['EsigibilitaIVA']
            ));
            $invoice->setValues('DatiPagamento', array(
                'CondizioniPagamento' => $input['CondizioniPagamento'],
                'ModalitaPagamento' => $input['ModalitaPagamento'],
                'DataScadenzaPagamento' => $input['DataScadenzaPagamento'],
                'ImportoPagamento' => $input['ImportoPagamento']
            ));

            //$invoice->setFilename($filename);$invoice->setPrefixPath($prefixPath)->save();  

             $xml = $invoice->asXML();
          
            return $xml;

        }
    }
