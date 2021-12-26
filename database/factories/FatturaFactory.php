<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FatturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'IdPaese'=>$this->faker->stateAbbr(),
            'IdCodice'=>$this->faker->regexify('[0-9]{10}'),
            'ProgressivoInvio'=>$this->faker->regexify('[0-9]{5}'),
            'FormatoTrasmissione'=>$this->faker->regexify('[A-Z]{2}[0-9]{2}'),
            'CodiceDestinatario'=>$this->faker->regexify('[A-Z]{6}'),
            'IdPaese2'=>$this->faker->stateAbbr(),
            'IdCodice2'=>$this->faker->randomNumber($nbDigits = 9, $strict = true),
            'Denominazione'=>$this->faker->company(),
            'RegimeFiscale'=>$this->faker->regexify('[A-Z]{2}[0-9]{2}'),
            'Indirizzo'=>$this->faker->address(),
            'CAP'=>$this->faker->regexify('[0-9]{5}'),
            'Comune'=>$this->faker->city (),
            'Provincia'=>$this->faker->citySuffix() ,
            'Nazione'=>$this->faker->stateAbbr(),
            'CodiceFiscale'=>$this->faker->randomNumber($nbDigits = 9, $strict = true) ,
            'Denominazione2'=>$this->faker->company(),
            'Indirizzo2'=>$this->faker->address(),
            'CAP2'=>$this->faker->regexify('[0-9]{5}'),
            'Comune2'=>$this->faker->city (),
            'Provincia2'=>$this->faker->regexify('[A-Z]{2}'),
            'Nazione2'=>$this->faker->stateAbbr(),
            'TipoDocumento'=>$this->faker->regexify('[A-Z]{2}[0-9]{2}'),
            'Divisa'=>$this->faker->randomElement($array = array ('EUR', 'USD', 'XAF')),
            'Data'=>$this->faker->date('Y-m-d'),
            'Numero'=>$this->faker->regexify('[0-9]{3}'),
            'Causale'=>$this->faker->sentence(),
            'RiferimentoNumeroLinea'=>$this->faker->randomDigitNotNull(),
            'IdDocumento'=>$this->faker->regexify('[0-9]{5}'),
            'NumItem'=>$this->faker->randomDigitNotNull(),
            'CodiceCUP'=>$this->faker->regexify('[0-9]{3}[a-z]{3}'),
            'CodiceCIG'=>$this->faker->regexify('[a-z]{3}[0-9]{3}'),
            'NumeroLinea'=>$this->faker->numberBetween($min = 1, $max = 20),
            'Descrizione'=>$this->faker->sentence(),
            'Quantita'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
            'PrezzoUnitario'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
            'PrezzoTotale'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
            'AliquotaIVA'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
            'AliquotaIVA2'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
            'ImponibileImporto'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
            'Imposta'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
            'EsigibilitaIVA'=>$this->faker->regexify('[A-Z]{1}'),
            'CondizioniPagamento'=>$this->faker->regexify('[A-Z]{2}[0-9]{2}'),
            'ModalitaPagamento'=>$this->faker->regexify('[A-Z]{2}[0-9]{2}'),
            'DataScadenzaPagamento'=>$this->faker->date('Y-m-d'),
            'ImportoPagamento'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
        ];
    }
}
