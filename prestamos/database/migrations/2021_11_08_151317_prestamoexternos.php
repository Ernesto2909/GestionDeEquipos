<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prestamoexternos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('prestamoexternos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('id_alumno_externo')->unsigned();
            $table->bigInteger('id_equipo')->unsigned();
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('id_alumno_externo')->references('id')->on('externos')->onDelete("cascade");
            $table->foreign('id_equipo')->references('id')->on('equipos')->onDelete("cascade");
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
