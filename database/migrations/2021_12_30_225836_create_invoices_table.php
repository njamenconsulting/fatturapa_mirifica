<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('IdPaese')->nullable();
            $table->string('IdCodice')->nullable();
            $table->string('ProgressivoInvio')->nullable();
            $table->string('FormatoTrasmissione')->nullable();
            $table->string('CodiceDestinatario')->nullable();
            $table->string('IdPaese2')->nullable();
            $table->string('IdCodice2')->nullable();
            $table->string('Denominazione')->nullable();
            $table->string('RegimeFiscale')->nullable();
            $table->string('Indirizzo')->nullable();
            $table->string('CAP')->nullable();
            $table->string('Comune')->nullable();
            $table->string('Provincia')->nullable();
            $table->string('Nazione')->nullable();
            $table->string('CodiceFiscale')->nullable();
            $table->string('Denominazione2')->nullable();
            $table->string('Indirizzo2')->nullable();
            $table->string('CAP2')->nullable();
            $table->string('Comune2')->nullable();
            $table->string('Provincia2')->nullable();
            $table->string('Nazione2')->nullable();
            $table->string('TipoDocumento')->nullable();
            $table->string('Divisa')->nullable();
            $table->string('Data')->nullable();
            $table->string('Numero')->nullable();
            //$table->string('Causale')->nullable();
            $table->text('Causale')->nullable();
            $table->string('RiferimentoNumeroLinea')->nullable();
            $table->string('IdDocumento')->nullable();
            $table->string('NumItem')->nullable();
            $table->string('CodiceCUP')->nullable();
            $table->string('CodiceCIG')->nullable();



            $table->string('RiferimentoNumeroLinea2')->nullable();
            $table->string('IdDocumento2')->nullable();
            $table->string('Data2')->nullable();
            $table->string('NumItem2')->nullable();
            $table->string('CodiceCUP2')->nullable();
            $table->string('CodiceCIG2')->nullable();

            $table->string('RiferimentoNumeroLinea3')->nullable();
            $table->string('IdDocumento3')->nullable();
            $table->string('NumItem3')->nullable();
            $table->string('CodiceCUP3')->nullable();
            $table->string('CodiceCIG3')->nullable();

            $table->string('RiferimentoNumeroLinea4')->nullable();
            $table->string('IdDocumento4')->nullable();
            $table->string('NumItem4')->nullable();
            $table->string('CodiceCUP4')->nullable();
            $table->string('CodiceCIG4')->nullable();

            $table->string('IdPaese3')->nullable();
            $table->string('IdCodice3')->nullable();
            $table->string('Denominazione3')->nullable();
            $table->string('DataOraConsegna')->nullable();

            $table->string('AliquotaIVA2')->nullable();
            $table->string('ImponibileImporto')->nullable();
            $table->string('Imposta')->nullable();
            $table->string('EsigibilitaIVA')->nullable();
            $table->string('CondizioniPagamento')->nullable();
            $table->string('ModalitaPagamento')->nullable();
            $table->string('DataScadenzaPagamento')->nullable();
            $table->string('ImportoPagamento')->nullable();
            $table->string('filename')->nullable();
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
        Schema::dropIfExists('invoices');
    }
}
