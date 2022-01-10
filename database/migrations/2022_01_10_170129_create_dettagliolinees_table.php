<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDettagliolineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('dettagliolinees', function (Blueprint $table) {
            $table->id();
            $table->string('NumeroLinea')->nullable();
            $table->text('Descrizione')->nullable();
            $table->string('Quantita')->nullable();
            $table->string('PrezzoUnitario')->nullable();
            $table->string('PrezzoTotale')->nullable();
            $table->string('AliquotaIVA')->nullable();
            $table->unsignedBigInteger('invoice_id');
            $table->foreign('invoice_id')
                  ->references('id')
                  ->on('invoices')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
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
        Schema::dropIfExists('dettagliolinees');
    }
}
