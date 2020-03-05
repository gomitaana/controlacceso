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
            $table->date('fechaCaducaTicket');
            $table->enum('statusTicket', ['Activo', 'Inactivo', 'Pendiente', 'Rechazado']);
            $table->unsignedBigInteger('fkInvitadoTicket');
            $table->timestamps();
            $table->foreign('fkInvitadoTicket')->references('idInvitado')->on('invitado');
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
