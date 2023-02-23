<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Http\Requests\ClientesFormRequest;
use Illuminate\Http\Request;
use DB;

class ClientesController extends Controller
{
  public function index() {
    $listagem = Clientes::orderBy('id','desc')->get();
    return view('clientes.index',compact('listagem'));
  }

  public function create() {
    return view('clientes.create');
  }

  public function edit($cliente) {
    $item = Clientes::findOrNew($cliente);
    return view('clientes.edit',compact('item'));
  }

  public function store(ClientesFormRequest $request) {
    DB::beginTransaction();
    if( Clientes::create( $request->all() ) ){
      $mensagem = MENSAGEM_SUCESSO;
      DB::commit(); 
    } else {
      $mensagem = MENSAGEM_INSUCESSO;
      DB::rollBack();
    }
    return to_route('clientes.index')->with('mensagem',$mensagem);
  }

  public function update(ClientesFormRequest $request) {
    DB::beginTransaction();
    if( Clientes::find( $request->id )->update( $request->all() ) ){
      $mensagem = MENSAGEM_SUCESSO;
      DB::commit(); 
    } else {
      $mensagem = MENSAGEM_INSUCESSO;
      DB::rollBack();
    }
    return to_route('clientes.index')->with('mensagem',$mensagem);
  }

  public function destroy($cliente) {
    DB::beginTransaction();
    if( Clientes::find( $cliente )->delete() ) {
      $mensagem = MENSAGEM_SUCESSO;
      DB::commit(); 
    } else {
      $mensagem = MENSAGEM_INSUCESSO;
      DB::rollBack();
    }

    return to_route('clientes.index')->with('mensagem',$mensagem);
  }
}
