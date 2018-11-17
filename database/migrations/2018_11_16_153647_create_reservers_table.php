<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReserversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservers', function (Blueprint $table) {
            $table->string('client_cin');
            $table->unsignedInteger('offre_id');
            $table->primary(['offre_id','client_cin']);
            $table->foreign('offre_id')->references('offre_id')->on('offres');
            $table->foreign('client_cin')->references('client_cin')->on('clients');
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
        Schema::dropIfExists('reservers');
    }
}
