<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->increments('offre_id');
            $table->string('offre_nom',30);
            $table->string('offre_pays',30);
            $table->string('offre_ville',30);
            $table->float("offre_prix");
            $table->unsignedInteger('offre_nb_place');
            $table->boolean('offre_del');
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
        Schema::dropIfExists('offres');
    }
}
