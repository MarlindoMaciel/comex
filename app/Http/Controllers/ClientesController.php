<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request; 

class ClientesController extends Controller
{
  public function index() {
    $listagem = Clientes::orderBy('id','desc')->get();

    return view('clientes',compact('listagem'));
  }

  public function store(Request $request) {
    if( Clientes::create( $request->all() ) ){
      $mensagem = "REGISTRO \"$request->nome\" CADASTRADO COM SUCESSO";
    } else {
      $mensagem = "OCORREU UM ERRO AO CADASTRAR O ITEM \"$request->nome\" ".$errors[0];
    }
    return redirect()->route('clientes')->with('mensagem',$mensagem);
  }

  public function update(Request $request) {
      if( Clientes::find( $request->id )->update( $request->all() ) ){
      $mensagem = "REGISTRO Nº $request->id ALTERADO COM SUCESSO";
    } else {
      $mensagem = "OCORREU UM ERRO AO TENTAR ALTERAR O REGISTRO Nº $request->id ".$errors[0];
    }
    return redirect()->route('clientes')->with('mensagem',$mensagem);
  }

  public function destroy(Request $request) {
    if( Clientes::find( $request->id )->delete() ) {
      $mensagem = "REGISTRO Nº $request->id EXCLUÍDO COM SUCESSO";
    } else {
      $mensagem = "OCORREU UM ERRO AO TENTAR EXLUIR O REGISTRO Nº $request->id";
    }

    return redirect()->route('clientes')->with('mensagem',$mensagem);
  }
}
