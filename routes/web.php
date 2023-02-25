<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

define("MENSAGEM_INSUCESSO",'<span class=" text-sucess"><i class="fa-solid fa-sm fa-check"></i>&nbsp;Operação realizada com sucesso!</span>');
define("MENSAGEM_SUCESSO",'<span class=" text-danger"><i class="fa-solid fa-sm fa-warning"></i>&nbsp;Operação não pode ser realizada!</span>');

Route::resource('/home',            App\Http\Controllers\ComexController::class);
Route::resource('pedidos',          App\Http\Controllers\PedidosController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile',          [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile',        [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile',       [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::resource('categorias',   App\Http\Controllers\CategoriasController::class);
    Route::resource('clientes',     App\Http\Controllers\ClientesController::class);
    Route::resource('produtos',     App\Http\Controllers\ProdutosController::class);
    Route::resource('testes',       App\Http\Controllers\TestesController::class);
});

require __DIR__.'/auth.php';