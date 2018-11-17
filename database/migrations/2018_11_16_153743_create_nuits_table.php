<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNuitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nuits', function (Blueprint $table) {
            $table->unsignedInteger('offre_id');
            $table->unsignedInteger('hotel_id');
            $table->primary(['offre_id','hotel_id']);
            $table->float('nuit_prix');
            $table->dateTime('nuit_date_db');
            $table->dateTime('nuit_date_end');
            $table->foreign('offre_id')->references('offre_id')->on('offres');
            $table->foreign('hotel_id')->references('hotel_id')->on('hotels');
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
        Schema::dropIfExists('nuits');
    }
}
