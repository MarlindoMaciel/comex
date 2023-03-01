<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('pedidos', function (Blueprint $table) {
            $table->integer('status_id') // Nome da coluna
                        ->default(1) // Preenchimento não obrigatório
                        ->after('clientes_id'); // Ordenado após a coluna "active"
        });
    }

    public function down()
    {
        Schema::table('pedidos', function (Blueprint $table) {
            $table->dropColumn('status_id');
        });
    }
};
