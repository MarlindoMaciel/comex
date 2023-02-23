<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome',255);
            $table->string('cpf',30)->nullable();
            $table->string('telefone',100)->nullable();
            $table->string('rua',255)->nullable();
            $table->string('numero',30)->nullable();
            $table->string('complemento',200)->nullable();
            $table->string('bairro',200)->nullable();
            $table->string('cidade',200)->nullable();
            $table->string('estado',200)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
