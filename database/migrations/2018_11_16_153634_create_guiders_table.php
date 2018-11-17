<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guiders', function (Blueprint $table) {
            $table->unsignedInteger('offre_id');
            $table->unsignedInteger('guide_id');
            $table->primary(['offre_id','guide_id']);
            $table->dateTime('guider_date_db');
            $table->dateTime('guider_date_end');
            $table->boolean('guider_del');
            $table->foreign('offre_id')->references('offre_id')->on('offres');
            $table->foreign('guide_id')->references('guide_id')->on('guides');
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
        Schema::dropIfExists('guiders');
    }
}
