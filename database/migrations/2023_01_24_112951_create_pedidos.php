<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('nome',255);
            $table->decimal('valor_parcial', 12,2)->nullable();
            $table->decimal('valor_desconto', 12,2)->nullable();
            $table->decimal('valor_total', 12,2)->nullable();
            $table->string('status',30)->default('INICIADO');//INICIADO-CANCELADO-CONCLUIDO-PAGO-FATURADO-ENVIADO-ENTREGUE-FINALIZADO-CONSOLIDADO-BAIXADO
            $table->foreignId('clientes_id')->contrained();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
};
