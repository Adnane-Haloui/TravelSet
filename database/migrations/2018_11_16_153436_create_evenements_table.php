<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->increments('event_id');
            $table->unsignedInteger('offre_id');
            $table->string('event_nom');
            $table->dateTime('event_date_db');
            $table->dateTime('event_date_end');
            $table->string('event_lieu');
            $table->string('event_descr');
            $table->unsignedInteger('event_transport')->nullable(true);
            $table->unsignedInteger('event_hotel')->nullable(true);
            $table->boolean('event_del');
            $table->foreign('offre_id')->references('offre_id')->on('offres');
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
        Schema::dropIfExists('evenements');
    }
}
