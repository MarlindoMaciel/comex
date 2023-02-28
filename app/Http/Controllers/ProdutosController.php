<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use App\Models\Categorias;
use App\Http\Requests\ProdutosFormRequest;
use Illuminate\Http\Request;
use DB;

class ProdutosController extends Controller
{
  public function index() {
    $listagem = Produtos::orderBy('id','desc')
                          ->join('categorias','categorias.id','produtos.categorias_id')
                          ->get([
                            'produtos.id as id',
                            'produtos.nome as nome',
                            'categorias.nome as categoria',
                            'produtos.valor_unitario',
                            'produtos.estoque',
                            'produtos.vendidos'
                          ]); 
    $categorias = Categorias::orderBy('id','desc')->get();
    return view('produtos.index',compact('listagem'));
  }

  public function create() {
    $categorias = Categorias::orderBy('id','desc')->get();
    return view('produtos.create',compact('categorias'));
  }

  public function edit($produto) {
    $item = Produtos::findOrNew($produto);
    $categorias = Categorias::orderBy('id','desc')->get();
    return view('produtos.edit',compact('item','categorias'));
  }

  public function store(ProdutosFormRequest $request) {
    DB::beginTransaction();
    if( Produtos::create( $request->all() ) ){
      $mensagem = MENSAGEM_SUCESSO;
      DB::commit(); 
    } else {
      $mensagem = MENSAGEM_INSUCESSO;
      DB::rollBack();
    }
    return to_route('produtos.index')->with('mensagem',$mensagem);
  }

  public function update(ProdutosFormRequest $request) {
    DB::beginTransaction();  
    if( Produtos::find( $request->id )->update( $request->all() ) ){
      $mensagem = MENSAGEM_SUCESSO;
      DB::commit(); 
    } else {
      $mensagem = MENSAGEM_INSUCESSO;
      DB::rollBack();
    }
    return to_route('produtos.index')->with('mensagem',$mensagem);
  }

  public function destroy($produto) {
    DB::beginTransaction();
    if( Produtos::find( $produto )->delete() ) {
      $mensagem = MENSAGEM_SUCESSO;
      DB::commit(); 
    } else {
      $mensagem = MENSAGEM_INSUCESSO;
      DB::rollBack();
    }

    return to_route('produtos.index')->with('mensagem',$mensagem);
  }
}
