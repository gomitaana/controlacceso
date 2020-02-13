<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->bigIncrements('idReporte');
            $table->string('tituloReporte', 40);
            $table->text('descripcionReporte');
            $table->enum('statusReporte', array('Activo', 'Inactivo', 'Atendido'))->default('Activo');
            $table->integer('fkPersona');
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
        Schema::dropIfExists('reportes');
    }
}
