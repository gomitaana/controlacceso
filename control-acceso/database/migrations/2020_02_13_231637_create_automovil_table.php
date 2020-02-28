<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomovilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automovil', function (Blueprint $table) {
            $table->bigIncrements('idAutomovil');
            $table->string('marcaAutomovil', 50);
            $table->string('colorAutomovil', 30);
            $table->string('noPlacaAutomovil', 30);
            $table->integer('fkCasaAutomovil');
            $table->enum('statusAutomovil', ['Activo', 'Inactivo']);
            $table->enum('tipoAutomovil', ['Moto', 'Carro', 'Camioneta']);
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
        Schema::dropIfExists('automovil');
    }
}
