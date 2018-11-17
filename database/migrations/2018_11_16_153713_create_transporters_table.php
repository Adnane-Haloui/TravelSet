<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transporters', function (Blueprint $table) {
            $table->unsignedInteger('offre_id');
            $table->unsignedInteger('transport_id');
            $table->primary(['offre_id','transport_id']);
            $table->float('transporter_prix');
            $table->dateTime('transporter_date_db');
            $table->dateTime('transporter_date_end');
            $table->foreign('offre_id')->references('offre_id')->on('offres');
            $table->foreign('transport_id')->references('transport_id')->on('transports');
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
        Schema::dropIfExists('transporters');
    }
}
