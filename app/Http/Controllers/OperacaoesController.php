<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use App\Models\Clientes;
use App\Models\Produtos;
use App\Models\Itens;
use Illuminate\Http\Request;

class OperacaoesController extends Controller
{
    public function index(){
        //
    }

    public function create($produtos_id){
        if ( !session->has('clientes_id_ativo') ){
            $cliente = Clientes::create();                
            session->set('clientes_id_ativo', $cliente->id);
        } 

        if ( !session->has('pedidos_id_ativo') ){
            $pedido = Pedidos::create();                
            session->set('pedidos_id_ativo', $cliente->id);
        } 

        $produto = Produtos::find($produtos_id);

        $item = new Itens;
        $item->valor_unitario   =   $produto->valor_unitario;
        $item->valor_parcial    =   $produto->valor_unitario;
        $item->valor_desconto   =   0;
        $item->valor_total      =   $produto->valor_unitario;
        $item->produtos_id      =   $produto->id;
        $item->pedidos_id       =   session('pedidos_id_ativo');
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        //
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
}
