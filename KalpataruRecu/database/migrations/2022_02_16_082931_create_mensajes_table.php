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
            $table->id();
            $table->string('creador')->nullable();
            $table->string('titulo');
            $table->string('contenido');
            $table->unsignedbigInteger('idUsuario');
            $table->unsignedbigInteger('idClase');
            $table->unsignedbigInteger('idEstado');
            $table->foreign('idUsuario')->references('id')->on('users');
            $table->foreign('idClase')->references('id')->on('clases');
            $table->foreign('idEstado')->references('id')->on('mensaje_estado');            
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
