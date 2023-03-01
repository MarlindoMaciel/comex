<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Pedidos;
use App\Models\Itens;
use App\Models\Clientes;
use App\Models\Status;
use App\Http\Requests\PedidosFormRequest;
use Illuminate\Http\Request;
use DB;

class PedidosController extends Controller
{
  public function index() {
    $listagem = Pedidos::orderBy('id','desc')->get();
    return view('pedidos.index',compact('listagem'));
  }

  public function show($pedido) {
    if ( isset( $pedido ) and $pedido > 0 ) 
      $id = $pedido;
    else  
      $id = session()->get('pedidos_id_ativo');

    $pedido = Pedidos::where('pedidos.id','=',$id)
                        ->join('status','status.id','=','pedidos.status_id')
                        ->get([
                          'pedidos.nome as nome_pedido',
                          'pedidos.valor_total',
                          'status.status as status_atual',
                          'pedidos.created_at as data',
                        ])
                        ->first();
    
    $listagem = Itens::where('pedidos_id','=',session()->get('pedidos_id_ativo'))
                        ->join('produtos','produtos.id','produtos_id')
                        ->get([
                            'itens.id',
                            'itens.valor_unitario',
                            'itens.valor_desconto',
                            'itens.quantidade',
                            'produtos.nome',
                          ]);
    session()->put('quantidade',count($listagem));                      
    return view('pedidos.show',compact('listagem','pedido'));
  }
 
  public function create() {
    $clientes = Clientes::all();
    $status = Status::all();
    return view('pedidos.create',compact('clientes','status'));
  }

  public function edit($pedido) {
    $item = Pedidos::findOrNew($pedido);
    $clientes = Clientes::all();
    $status = Status::all();
    return view('pedidos.edit',compact('item','clientes','status'));
  }

  public function store(PedidosFormRequest $request) {
    DB::beginTransaction();
    if( Pedidos::create( $request->all() ) ){
      $mensagem = MENSAGEM_SUCESSO;
      DB::commit(); 
    } else {
      $mensagem = MENSAGEM_INSUCESSO;
      DB::rollBack();
    }
    return to_route('pedidos.index')->with('mensagem',$mensagem);
  }

  public function update(PedidosFormRequest $request) {
    DB::beginTransaction();
    if( Pedidos::find( $request->id )->update( $request->all() ) ){
      $mensagem = MENSAGEM_SUCESSO;
      DB::commit(); 
    } else {
      $mensagem = MENSAGEM_INSUCESSO;
      DB::rollBack();
    }
    return to_route('pedidos.index')->with('mensagem',$mensagem);
  } 

  public function destroy($pedido) {
    DB::beginTransaction();
    if( Pedidos::find( $pedido )->delete() ) {
      $mensagem = MENSAGEM_SUCESSO;
      DB::commit(); 
    } else {
      $mensagem = MENSAGEM_INSUCESSO;
      DB::rollBack();
    }

    return to_route('pedidos.index')->with('mensagem',$mensagem);
  }
}
