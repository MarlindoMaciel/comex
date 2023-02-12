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
        Schema::create('itens', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor_unitario', 12,2);
            $table->decimal('valor_parcial', 12,2)->nullable();
            $table->decimal('valor_desconto', 12,2)->nullable();
            $table->decimal('valor_total', 12,2)->nullable();
            $table->integer('quantidade')->default(1);
            $table->foreignId('produtos_id')->contrained();
            $table->foreignId('pedidos_id')->contrained();
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
        Schema::dropIfExists('itens');
    }
};
