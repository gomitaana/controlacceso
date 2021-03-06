<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCondominiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condominios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreCondominio', 100);
            $table->string('paisCondominio', 100);
            $table->string('estadoCondominio', 100);
            $table->string('direccionCondominio', 200);
            $table->integer('codigoPostalCondominio');
            $table->integer('totalDeCasasCondominio');
            $table->enum('statusCondominio', ['Activo', 'Inactivo']);
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
        Schema::dropIfExists('condominios');
    }
}
