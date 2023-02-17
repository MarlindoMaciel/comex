<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class TestesController extends Controller
{
    public function index() {
      $classe = "categorias";
      $modelo = 'App\Models\\'.ucfirst( $classe );
      $listagem = $modelo::orderBy('id','desc')->get();
      return view('testes',compact('listagem','classe'));
    }

    public function create() {
      $classe = "categorias";
      return view('create',compact('classe'));
    }

    public function edit() {
      $classe = "categorias";
      return view('create',compact('classe'));
    }

    public function show() {
      $listagem = Categorias::orderBy('id','desc')->get();
      return view('testes',compact('listagem'));
    }

    public function store(Request $request) {
      if( Categorias::create( $request->all() ) ){
        $mensagem = "REGISTRO \"$request->nome\" CADASTRADO COM SUCESSO";
      } else {
        $mensagem = "OCORREU UM ERRO AO CADASTRAR O ITEM \"$request->nome\" ".$errors[0];
      }
      return redirect()->route('testes.index')->with('mensagem',$mensagem);
    }

    public function update(Request $request) {
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

      return redirect()->route('testes.index')->with('mensagem',$mensagem);
    }
}
