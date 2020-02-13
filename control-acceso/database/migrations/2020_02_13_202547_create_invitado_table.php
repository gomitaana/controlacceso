<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitado', function (Blueprint $table) {
            $table->bigIncrements('idInvitado');
            $table->string('nombreCompleto');
            $table->integer('telefonoInvitado');
            $table->enum('generoInvitado', array('M', 'F'));
            $table->string('emailInvitado');
            $table->enum('statusInvitado', array('Activo', 'Inactivo'))->default('Activo');
            $table->integer('fkPersona');
            $table->integer('fkIdentificacion');
            $table->integer('fkPlacaInvitado');
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
        Schema::dropIfExists('invitado');
    }
}
