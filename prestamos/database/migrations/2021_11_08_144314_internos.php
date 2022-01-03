<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Internos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('internos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('carnet');
            $table->string('nombres');
            $table->string('apellidos');
            $table->bigInteger('id_decanato')->unsigned();
            $table->string('carrera');
            $table->string('sexo');
            $table->timestamps();
            $table->foreign('id_decanato')->references('id')->on('decanatos')->onDelete("cascade");
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
