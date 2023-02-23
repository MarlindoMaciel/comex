<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class StatusSeed extends Seeder
{
    public function run()
    {
        $dados =[ 
            ["status" => "INICIADO"],
            ["status" => "CANCELADO"],
            ["status" => "CONCLUIDO"],
            ["status" => "PAGO"],
            ["status" => "FATURADO"],
            ["status" => "ENVIADO"],
            ["status" => "ENTREGUE"],
            ["status" => "FINALIZADO"],
            ["status" => "CONSOLIDADO"],
            ["status" => "BAIXADO"],
            ];

        DB::table('status')->delete();    
        DB::table('status')->insert($dados);    
    }
}
