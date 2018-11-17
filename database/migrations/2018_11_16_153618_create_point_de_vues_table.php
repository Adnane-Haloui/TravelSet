<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointDeVuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_de_vues', function (Blueprint $table) {
            $table->unsignedInteger('offre_id');
            $table->string('client_cin');
            $table->primary(['offre_id','client_cin']);
            $table->unsignedInteger('pv_organisation');
            $table->unsignedInteger('pv_hotel');
            $table->unsignedInteger('pv_transport');
            $table->unsignedInteger('pv_guide');
            $table->string('pv_desc');
            $table->boolean('pv_del');
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
        Schema::dropIfExists('point_de_vues');
    }
}
