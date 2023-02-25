<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategoriasSeed extends Seeder
{
    public function run()
    {
        $dados =[ 
            ["nome" => "LUXO"],
            ["nome" => "CELULARES"],
            ["nome" => "INFORMÁTICA"],
            ["nome" => "MÓVEIS"],
            ["nome" => "AUTOMOTIVA"],
            ["nome" => "LIVROS"],
            ["nome" => "BELEZA"],
            ["nome" => "ESPORTE"],
            ];

        DB::table('categorias')->delete();    
        DB::table('categorias')->insert($dados);    
    }
}
