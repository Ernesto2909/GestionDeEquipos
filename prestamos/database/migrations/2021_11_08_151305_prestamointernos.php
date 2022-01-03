<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prestamointernos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('prestamointernos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('id_alumno_interno')->unsigned();
            $table->bigInteger('id_equipo')->unsigned();
            $table->date('fecha');
            
            $table->timestamps();
            $table->foreign('id_alumno_interno')->references('id')->on('internos')->onDelete("cascade");
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
