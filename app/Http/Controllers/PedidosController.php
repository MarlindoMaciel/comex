<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
  public function index() {
    $listagem = Pedidos::orderBy('id','desc')->get();
    return view('pedidos',compact('listagem'));
  }

  public function store(Request $request) {
    if( Pedidos::create( $request->all() ) ){
      $mensagem = "REGISTRO \"$request->nome\" CADASTRADO COM SUCESSO";
    } else {
      $mensagem = "OCORREU UM ERRO AO CADASTRAR O ITEM \"$request->nome\" ".$errors[0];
    }
    return redirect()->route('pedidos')->with('mensagem',$mensagem);
  }

  public function update(Request $request) {
    if( Pedidos::find( $request->id )->update( $request->all() ) ){
      $mensagem = "REGISTRO Nº $request->id ALTERADO COM SUCESSO";
    } else {
      $mensagem = "OCORREU UM ERRO AO TENTAR ALTERAR O REGISTRO Nº $request->id ".$errors[0];
    }
    return redirect()->route('pedidos')->with('mensagem',$mensagem);
  } 

  public function destroy(Request $request) {
    if( Pedidos::find( $request->id )->delete() ) {
      $mensagem = "REGISTRO Nº $request->id EXCLUÍDO COM SUCESSO";
    } else {
      $mensagem = "OCORREU UM ERRO AO TENTAR EXLUIR O REGISTRO Nº $request->id ".$errors[0];
    }

    return redirect()->route('pedidos')->with('mensagem',$mensagem);
  }
}
