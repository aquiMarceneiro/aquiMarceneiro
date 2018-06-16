<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('cpf_cnpj')->nullable();
            
            
            $table->char('uf',2);
            $table->string('cidade');
            $table->string('bairro');
            $table->string('rua');
            $table->string('cep');
            
            $table->longText('descricao');
            $table->string('especialidade');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('foto_usuario')->nullable();;
            $table->integer('tipo');
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
        //
    }
}
