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
        session()->flash("mensagem",MENSAGEM_SUCESSO);
      } else {
        session()->flash("mensagem",MENSAGEM_INSUCESSO);
      }
      return to_route('categorias.index');
    }

    public function update(Request $request) {
      //dd($request);
      if( Categorias::find( $request->id )->update( $request->all() ) ){
        session()->flash("mensagem",MENSAGEM_SUCESSO);
      } else {
        session()->flash("mensagem",MENSAGEM_INSUCESSO);
      }
      return to_route('categorias.index');
    }
    
    public function destroy($id) {
      if( Categorias::find( $id )->delete() ) {
        session('message',MENSAGEM_SUCESSO);
      } else {
        session('message',MENSAGEM_INSUCESSO);
      }
      return to_route('categorias.index');
    }
}
