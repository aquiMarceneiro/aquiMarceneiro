<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('usuario', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf');
            $table->string('senha');
            $table->string('email');
            $table->char('uf',2);
            $table->string('cidade');
            $table->string('cep');
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
        //
        Schema::dropIfExist('usuario');
    }
}
