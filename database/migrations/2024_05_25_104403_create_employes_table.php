<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('Numcine');
            $table->string('nom');
            $table->string('prenom');
            $table->date('dateNaiss');
            $table->string('address');
            $table->string('email');
            $table->integer('telephone');
            $table->string('specialisation');
            $table->string('PreuvesObtenues');
            $table->string('demande');
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
        Schema::dropIfExists('employes');
    }
};
