<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('hotel_id');
            $table->string('hotel_nom',70);
            $table->string('hotel_tel',20);
            $table->string('hotel_adresse');
            $table->string('hotel_mail');
            $table->unsignedInteger('hotel_rank');
            $table->string('hotel_pays',50);
            $table->string('hotel_ville',50);
            $table->boolean('hotel_del');
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
        Schema::dropIfExists('hotels');
    }
}
