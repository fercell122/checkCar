<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevisoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revisao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('km');
            $table->string('funcEletrica');
            $table->string('funcMecanica');
            $table->string('condFuncionamento');
            $table->string('condPneu');
            $table->string('obsGeral');
            $table->timestamps();
            $table->unsignedInteger('carro_id');
            $table->foreign('carro_id')->references('id')->on('carros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('revisao');
    }
}
