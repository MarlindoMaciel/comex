<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use App\Models\Categorias;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
  public function index() {
    $listagem = Produtos::orderBy('id','desc')->get();
    $categorias = Categorias::orderBy('id','desc')->get();
    return view('produtos.index',compact('listagem','categorias'));
  }

  public function edit($produto) {
    $item = Produtos::findOrNew($produto);
    $categorias = Categorias::orderBy('id','desc')->get();
    return view('produtos.edit',compact('item','categorias'));
  }

  public function create(Request $request) {
    $item = Produtos::findOrNew($request->id);
    $categorias = Categorias::orderBy('id','desc')->get();
    return view('produtos.create',compact('item','categorias'));
  }

  public function store(Request $request) {
    if( Produtos::create( $request->all() ) ){
      $mensagem = "REGISTRO \"$request->nome\" CADASTRADO COM SUCESSO";
    } else {
      $mensagem = "OCORREU UM ERRO AO CADASTRAR O ITEM \"$request->nome\" ".$errors[0];
    }
    return redirect()->route('produtos.index')->with('mensagem',$mensagem);
  }

  public function update(Request $request) {
    
    if( Produtos::find( $request->id )->update( $request->all() ) ){
      $mensagem = "REGISTRO Nº $request->id ALTERADO COM SUCESSO";
    } else {
      $mensagem = "OCORREU UM ERRO AO TENTAR ALTERAR O REGISTRO Nº $request->id ".$errors[0];
    }
    return redirect()->route('produtos.index')->with('mensagem',$mensagem);
  }

  public function destroy(Request $request) {
    if( Produtos::find( $request->id )->delete() ) {
      $mensagem = "REGISTRO Nº $request->id EXCLUÍDO COM SUCESSO";
    } else {
      $mensagem = "OCORREU UM ERRO AO TENTAR EXLUIR O REGISTRO Nº $request->id";
    }

    return redirect()->route('produtos.index')->with('mensagem',$mensagem);
  }
}
