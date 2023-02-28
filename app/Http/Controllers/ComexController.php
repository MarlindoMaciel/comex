<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Produtos;
use Illuminate\Http\Request;

class ComexController extends Controller
{
    public function index(Request $request) {
      $menu_lateral = Categorias::all();
      
      if( $request->id > 0 )
         $produtos = Produtos::where('categorias_id','=',$request->id)->get();
      elseif( $request->id == -1 ) //os mais vendidos
         $produtos = Produtos::where('vendidos','>',0)->take(12)->orderBy('vendidos','desc')->get();
      elseif( $request->id == -2 ) //os mais recentes
         $produtos = Produtos::orderBy('created_at','desc')->take(12)->get();
      else
         $produtos = Produtos::orderBy('created_at','desc')->get();

      $quantidade=10;

      return view('index',compact('menu_lateral','produtos','quantidade'));
    }
}
