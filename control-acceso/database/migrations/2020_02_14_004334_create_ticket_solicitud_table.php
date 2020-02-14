<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_solicitud', function (Blueprint $table) {
            $table->bigIncrements('idTicket');
            $table->timestamp('fechaVisitaTicket');
            $table->dateTime('horaInicialPermitidaTicket');
            $table->dateTime('horaCaducaTicket');
            $table->enum('statusTicket', ['Activo', 'Inactivo']);
            $table->integer('fkInvitadoTicket');
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
        Schema::dropIfExists('ticket_solicitud');
    }
}
