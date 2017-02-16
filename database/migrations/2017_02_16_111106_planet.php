<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Planet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planet', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('size');
            $table->tinyInteger('orbits_sun');
            $table->integer('sun_id')->references('id')->on('sun');;
            $table->integer('solarsystem_id')->references('id')->on('solar_system');;
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
        Schema::drop('planet');
    }
}
