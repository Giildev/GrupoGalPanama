<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phs', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('address');
          $table->string('table');
          $table->string('googlemaplink');
          $table->string('gmap');
          $table->string('plano1');
          $table->string('plano2');
          $table->string('plano3');
          $table->string('foto1');
          $table->string('foto2');
          $table->string('foto3');
          $table->string('memoria');
          $table->string('estado');
          $table->string('ventas');
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
        Schema::drop('phs');
    }
}
