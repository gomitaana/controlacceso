<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //tabla persona
        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('idPersona');
            $table->string('nombrePersona');
            $table->string('apellidosPersona');
            $table->integer('telefonoPersona');
            $table->enum('generoPersona', ['Femenino', 'Masculino', 'Otro']);
            $table->date('fechaNacimientoPersona');
            $table->enum('statusPersona', ['Activo','Inactivo'])->default('Activo');
            $table->timestamps();
        });

        //tabla archivos
        Schema::create('archivos', function (Blueprint $table) {
            $table->bigIncrements('idArchivo');
            $table->string('nombreArchivo', 60);
            $table->string('extencionArchivo', 10);
            $table->double('tamanoArchivo');
            $table->string('uriArchivo', 160);
            $table->string('mimeArchivo', 20);
            $table->enum('statusArchivo', array('Activo', 'Inactivo'))->default('Activo');
            $table->enum('tipoArchivo', ['fotoPerfil', 'fotoPlaca', 'fotoIdentificacion', 'fotoQueja']);
            $table->timestamps();
        });

        //tabla usuarios
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('idUsuario');
            $table->string('nombreClaveUsuario');
            $table->string('emailUsuario')->unique();
            $table->timestamp('emailUsuario_verified_at')->nullable();
            $table->string('passwordUsuario');
            $table->enum('tipoUsuario',['AdminMaster','Admin','Usuario','Vigilante']);
            $table->unsignedBigInteger('fkPersonaUsuario');
            $table->unsignedBigInteger('fkFotoPerfilUsuario');
            $table->rememberToken();
            $table->timestamps();
            $table->enum('statusUsuario', ['Activo','Inactivo'])->default('Activo');
            $table->foreign('fkPersonaUsuario')->references('idPersona')->on('persona');
            $table->foreign('fkFotoPerfilUsuario')->references('idArchivo')->on('archivos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('persona');
        Schema::dropIfExists('archivos');
    }
}
