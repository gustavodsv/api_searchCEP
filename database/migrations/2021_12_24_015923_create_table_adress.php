<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAdress extends Migration
{

    public function up()
    {
        Schema::create('adress', function (Blueprint $table) {
            $table->id();
            $table->string('cep');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('complemento')->nullable();
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('adress');
    }
}
