<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carro', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('modelo');
            $table->string('tipo');
            $table->string('combustivel');
            $table->string('ano_fab');
            $table->string('fabricante');
            $table->string('cor');
            
            
            $table->timestamps();
            $table->unsignedInteger('user_id');
        
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carro');
    }
}
