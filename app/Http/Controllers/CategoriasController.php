<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Http\Requests\CategoriasFormRequest;
use Illuminate\Http\Request;
use DB;

class CategoriasController extends Controller
{
    public function index() {
      $listagem = Categorias::orderBy('id','desc')->get();
      return view('categorias.index',compact('listagem'));
    }

    public function create() {
      return view('categorias.create');
    }

    public function edit($categoria) {
      $item = Categorias::findOrNew($categoria);
      return view('categorias.edit',compact('item'));
    }

    public function store(CategoriasFormRequest $request, CategoriasRepository $repository) {
        $mensagem = $repository->add($request);
        return to_route('categorias.index')->with('mensagem',$mensagem);
    }

    public function update(CategoriasFormRequest $request) {
      DB::beginTransaction();
      if( Categorias::find( $request->id )->update( $request->all() ) ){
        $mensagem = MENSAGEM_SUCESSO;
        DB::commit();
      } else {
        $mensagem = MENSAGEM_INSUCESSO;
        DB::rollBack();
      }
      return to_route('categorias.index')->with('mensagem',$mensagem);
    }
    
    public function destroy($categoria) {
      DB::beginTransaction();
      if( Categorias::find( $categoria )->delete() ) {
        $mensagem = MENSAGEM_SUCESSO;
        DB::commit();
      } else {
        $mensagem = MENSAGEM_INSUCESSO;
        DB::rollBack();
      }
      return to_route('categorias.index')->with('mensagem',$mensagem);;
    }
}
