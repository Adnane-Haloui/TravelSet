<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->string('client_cin',30)->primary();
            $table->string('client_nom',30);
            $table->string('client_prenom',40);
            $table->string('email',50)->unique();;
            $table->string('client_tel',20);
            $table->string('client_payer',30);
            $table->string('client_ville',50);
            $table->string('password');
            $table->string('client_pseudo');
            $table->string('client_role');
            $table->boolean('client_del')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('clients');
    }
}
