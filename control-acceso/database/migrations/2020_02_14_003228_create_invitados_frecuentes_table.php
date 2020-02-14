<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitadosFrecuentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitados_frecuentes', function (Blueprint $table) {
            $table->bigIncrements('idInvitadoFrecuente');
            $table->integer('fkCasaInvitadoFrecuente');
            $table->integer('fkPersonaInvitadoFrecuente');
            $table->integer('fkCInvitadoInvitadoFrecuente');
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
        Schema::dropIfExists('invitados_frecuentes');
    }
}
