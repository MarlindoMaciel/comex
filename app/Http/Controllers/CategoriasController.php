<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index() {
      $listagem = Categorias::orderBy('id','desc')->get();
      return view('categorias.index',compact('listagem'));
    }

    public function edit($categoria) {
      $item = Categorias::findOrNew($categoria);
      return view('categorias.edit',compact('item'));
    }

    public function create(Request $request) {
      $item = Categorias::findOrNew($request->id);
      return view('categorias.create',compact('item'));
    }

    public function store(Request $request) {
      if( Categorias::create( $request->all() ) ){
        $mensagem = "REGISTRO \"$request->nome\" CADASTRADO COM SUCESSO";
      } else {
        $mensagem = "OCORREU UM ERRO AO CADASTRAR O ITEM \"$request->nome\" ".$errors[0];
      }
      return redirect()->route('categorias.index')->with('mensagem',$mensagem);
    }

    public function update(Request $request) {
      //dd($request);
      if( Categorias::find( $request->id )->update( $request->all() ) ){
        $mensagem = "REGISTRO Nº $request->id ALTERADO COM SUCESSO";
      } else {
        $mensagem = "OCORREU UM ERRO AO TENTAR ALTERAR O REGISTRO Nº $request->id ".$errors[0];
      }
      return redirect()->route('categorias.index')->with('mensagem',$mensagem);
    }
    
    public function destroy($id) {
      if( Categorias::find( $id )->delete() ) {
        $mensagem = "REGISTRO Nº $id EXCLUÍDO COM SUCESSO";
      } else {
        $mensagem = "OCORREU UM ERRO AO TENTAR EXLUIR O REGISTRO Nº $id";
      }

      return redirect()->route('categorias.index')->with('mensagem',$mensagem);
    }
}
