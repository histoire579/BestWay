<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('numero',50);
            $table->string('nom',150);
            $table->date('datenais',50);
            $table->string('telephone',50);
            $table->string('sexe',50);
            $table->string('localisation',50);
            $table->string('profession',50);
            $table->string('login',50);
            $table->string('password',255);
            $table->string('etat',50);
            $table->integer('idtype')->unsigned();
            $table->foreign('idtype')->references('id')->on('type_comptes')->onDelete('restrict');
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
        Schema::dropIfExists('comptes');
    }
}
