<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('creador')->nullable();
            $table->string('titulo');
            $table->string('contenido');
            $table->bigInteger('idUsuario');
            $table->bigInteger('idClase');
            $table->bigInteger('idEstado');
            $table->bigInteger('idUsuario')->references('id')->on('users');
            $table->bigInteger('idClase')->references('id')->on('clases');
            $table->bigInteger('idEstado')->references('id')->on('mensaje_estados');            
            $table->date('fecha');
            $table->bigInteger('likes');
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
        Schema::dropIfExists('mensajes');
    }
}
