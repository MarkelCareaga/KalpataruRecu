<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('idCurso');
            $table->unsignedbigInteger('IdNivel');
            $table->unsignedbigInteger('idGrado');
            $table->foreign('idCurso')->references('id')->on('curso');
            $table->foreign('idNivel')->references('id')->on('niveles');
            $table->foreign('idGrado')->references('id')->on('grados');
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
        Schema::dropIfExists('clases');
    }
}
