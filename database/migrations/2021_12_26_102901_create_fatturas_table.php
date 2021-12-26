<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFatturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fatturas', function (Blueprint $table) {
            $table->id();
            $table->string('IdPaese');
            $table->string('IdCodice');
            $table->string('ProgressivoInvio');
            $table->string('FormatoTrasmissione');
            $table->string('CodiceDestinatario');
            $table->string('IdPaese2');
            $table->string('IdCodice2');
            $table->string('Denominazione');
            $table->string('RegimeFiscale');
            $table->string('Indirizzo');
            $table->string('CAP');
            $table->string('Comune');
            $table->string('Provincia');
            $table->string('Nazione');
            $table->string('CodiceFiscale');
            $table->string('Denominazione2');
            $table->string('Indirizzo2');
            $table->string('CAP2');
            $table->string('Comune2');
            $table->string('Provincia2');
            $table->string('Nazione2');
            $table->string('TipoDocumento');
            $table->string('Divisa');
            $table->string('Data');
            $table->string('Numero');
            $table->string('Causale');
            $table->string('RiferimentoNumeroLinea');
            $table->string('IdDocumento');
            $table->string('NumItem');
            $table->string('CodiceCUP');
            $table->string('CodiceCIG');

            $table->string('IdPaese3');
            $table->string('IdCodice3');
            $table->string('Denominazione3');
            $table->string('DataOraConsegna');

            $table->string('NumeroLinea');
            $table->string('Descrizione');
            $table->string('Quantita');
            $table->string('PrezzoUnitario');
            $table->string('PrezzoTotale');
            $table->string('AliquotaIVA');
            $table->string('AliquotaIVA2');
            $table->string('ImponibileImporto');
            $table->string('Imposta');
            $table->string('EsigibilitaIVA');
            $table->string('CondizioniPagamento');
            $table->string('ModalitaPagamento');
            $table->string('DataScadenzaPagamento');
            $table->string('ImportoPagamento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fatturas');
    }
}
