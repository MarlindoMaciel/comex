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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->text('descricao')->nullable();
            $table->decimal('valor_unitario', 12,2)->default(0);
            $table->integer('estoque')->default(0);
            $table->integer('vendidos')->default(0);
            $table->foreignId('categorias_id')->contrained();
            $table->string('miniatura',255)->default('comex.png');
            $table->string('imagem',255)->default('comex.png');
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
        Schema::dropIfExists('produtos');
    }
};
