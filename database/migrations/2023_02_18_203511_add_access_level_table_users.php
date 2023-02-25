<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('acess_level') // Nome da coluna
                        ->default(1) // Preenchimento não obrigatório
                        ->after('active'); // Ordenado após a coluna "active"
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('acess_level');
        });
    }
};
