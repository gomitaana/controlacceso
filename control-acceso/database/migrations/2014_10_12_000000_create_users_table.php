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
        Schema::create('Usuario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreClaveUsuario');
            $table->string('emailusuario')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('passwordUsuario');
            $table->string('tipoUsuario');
            $table->string('statusUsuario');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
