<?php
namespace App\Helpers;

use Illuminate\Support\Str;
use Faker\Factory as Faker;

    class GetFakerDataHelper
    {
        /**
         * Fill array with fake data
         */
        public static function getFakerData()
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
            

                        'RiferimentoNumeroLinea2' => $faker->randomDigitNotNull(),
                        'IdDocumento2' => $faker->regexify('[0-9]{5}'),
                        'Data2' => $faker->date('Y-m-d'),
                        'NumItem2' => $faker->randomDigitNotNull(),
                        'CodiceCUP2' => $faker->regexify('[0-9]{3}[a-z]{3}'),
                        'CodiceCIG2' => $faker->regexify('[a-z]{3}[0-9]{3}'),                       

                        'RiferimentoNumeroLinea3' => $faker->randomDigitNotNull(),
                        'IdDocumento3' => $faker->regexify('[0-9]{5}'),
                        'NumItem3' => $faker->randomDigitNotNull(),
                        'CodiceCUP3' => $faker->regexify('[0-9]{3}[a-z]{3}'),
                        'CodiceCIG3' => $faker->regexify('[a-z]{3}[0-9]{3}'),

                        'RiferimentoNumeroLinea4' => $faker->randomDigitNotNull(),
                        'IdDocumento4' => $faker->regexify('[0-9]{5}'),
                        'NumItem4' => $faker->randomDigitNotNull(),
                        'CodiceCUP4' => $faker->regexify('[0-9]{3}[a-z]{3}'),
                        'CodiceCIG4' => $faker->regexify('[a-z]{3}[0-9]{3}'),


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
    }