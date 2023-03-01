<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use App\Models\Clientes;
use App\Models\Produtos;
use App\Models\Itens;
use Illuminate\Http\Request;

class OperacoesController extends Controller
{
    public function index(){
        //
    }

    public function create(Request $request){
        $retorno = (object) Array();

        if ( !session()->has('quantidade')  ){
            session()->put('quantidade', 0);
        } 

        if ( !session()->has('clientes_id_ativo') ){
            $cliente = Clientes::create(["nome"=>$request->session()->get('_token')]);                
            session()->put('clientes_id_ativo', $cliente->id);
        } 

        if ( !session()->has('pedidos_id_ativo') ){
            $pedido = Pedidos::create(["nome"=>"PEDIDO_0001","clientes_id"=>session()->get('clientes_id_ativo')]);                
            session()->put('pedidos_id_ativo', $pedido->id);
        } 

        $produto = Produtos::find($request->id);

        $item = new Itens;
        $item->valor_unitario   =   $produto->valor_unitario;
        $item->valor_parcial    =   $produto->valor_unitario;
        $item->valor_desconto   =   0;
        $item->valor_total      =   $produto->valor_unitario;
        $item->produtos_id      =   $produto->id;
        $item->pedidos_id       =   session()->get('pedidos_id_ativo');
        $item->save();
        
        $retorno->quantidade    =   session()->get('quantidade');

        
        $retorno->quantidade++;
        session()->put('quantidade',$retorno->quantidade);
        
        $retorno->mensagem='<i class="fa-solid fa-sm fa-heart"></i>&nbsp;Produto adicionado a sua lista de compras.';
           
        return json_encode($retorno); 
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
