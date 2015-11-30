<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Subjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('subjects', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre')->unique();
          $table->string('descripcion');
          $table->integer('archivos');
          $table->integer('descargas');
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
        Schema::drop('subjects');
    }
}
