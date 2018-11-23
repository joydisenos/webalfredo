<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('telefono');
            $table->string('documento')->nullable();
            $table->string('pais')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('codigo')->nullable();
            $table->string('direccion')->nullable();
            $table->string('nombre_emp')->nullable();
            $table->string('nombre_com_emp')->nullable();
            $table->string('cif_nif')->nullable();
            $table->string('correo_emp')->nullable();
            $table->string('telefono_emp')->nullable();
            $table->string('pais_emp')->nullable();
            $table->string('ciudad_emp')->nullable();
            $table->string('codigo_emp')->nullable();
            $table->string('tipo')->nullable();
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
