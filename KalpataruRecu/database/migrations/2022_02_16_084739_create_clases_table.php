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
            $table->bigInteger('idCurso');
            $table->bigInteger('idNivel');
            $table->bigInteger('idGrado');
            $table->bigInteger('idCurso')->references('id')->on('curso');
            $table->bigInteger('idNivel')->references('id')->on('niveles');
            $table->bigInteger('idGrado')->references('id')->on('grados');
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
