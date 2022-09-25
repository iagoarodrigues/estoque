<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProfissionalController;
use App\Http\Controllers\SalaoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ServicoController;
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

Route::get('/', function () {
    return view('welcome');
});


//ROTA PRODUTO//

//listar todos os produtos
Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');

//create
Route::get('produto/create', [ProdutoController::class, 'create'])->name('produto.create');

//store
Route::post('produto/create', [ProdutoController::class, 'store'])->name('produto.store');

// show 
Route::get('/produto/{id}', [ProdutoController::class, 'show'])->name('produto.show');


//edit
Route::get('/produto/{id}/edit', [ProdutoController::class, 'edit'])->name('produto.edit');


//update
Route::put('/produto/{id}', [ProdutoController::class, 'update'])->name('produto.update');


//delete
Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])->name('produto.delete');


//*-----------------------------FIM DA ROTA PRODUTO-----------------------------------------*//


//ROTA CATEGORIA//
Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');



//create
Route::get('categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');


//store
Route::post('categoria/create', [CategoriaController::class, 'store'])->name('categoria.store');

// show 
Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');

//edit
Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');


//update
Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');


//delete
Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('categoria.delete');


//*--------------------------------FIM DA ROTA CATEGORIA-------------------------------------------*//


//ROTA USUARIO//
Route::get('/usuario', [UsuarioController::class, 'index'])->name('usuario.index');

// show 
Route::get('/usuario/{id}', [UsusarioController::class, 'show'])->name('usuario.show');


//create
Route::get('usuario/create', [UsuarioController::class, 'create'])->name('usuario.create');


//store
Route::post('usuario/create', [UsuarioController::class, 'store'])->name('usuario.store');


//edit
Route::get('/usuario/{id}/edit', [UsuarioController::class, 'edit'])->name('usuario.edit');


//update
Route::put('/usuario/{id}', [UsuarioController::class, 'update'])->name('usuario.update');


//delete
Route::delete('/usuario/{id}', [UsuarioController::class, 'destroy'])->name('usuario.delete');


//*--------------------------------FIM DA ROTA USUARIO-------------------------------------------*//


//ROTA PROFISSIONAL//
Route::get('/profissional', [ProfissionalController::class, 'index'])->name('profissional.index');


// show 
Route::get('/profissional/{id}', [ProfissionalController::class, 'show'])->name('profissional.show');

//create
Route::get('profissional/create', [ProfissionalController::class, 'create'])->name('profissional.create');


//store
Route::post('profissional/create', [ProfissionalController::class, 'store'])->name('profissional.store');


//edit
Route::get('/profissional/{id}/edit', [ProfissionalController::class, 'edit'])->name('profissional.edit');


//update
Route::put('/profissional/{id}', [ProfissionalController::class, 'update'])->name('profissional.update');


//delete
Route::delete('/profissional/{id}', [ProfissionalController::class, 'destroy'])->name('profissional.delete');


//*------------------------------FIM DA ROTA PROFISSIONAL-------------------------------------------*//


//ROTA SALAO//
Route::get('/salao', [SalaoController::class, 'index'])->name('salao.index');

// show 
Route::get('/salao/{id}', [SalaoController::class, 'show'])->name('salao.show');


//create
Route::get('salao/create', [SalaoController::class, 'create'])->name('salao.create');


//store
Route::post('salao/create', [SalaoController::class, 'store'])->name('salao.store');


//edit
Route::get('/salao/{id}/edit', [SalaoController::class, 'edit'])->name('salao.edit');


//update
Route::put('/salao/{id}', [SalaoController::class, 'update'])->name('salao.update');


//delete
Route::delete('/salao/{id}', [SalaoController::class, 'destroy'])->name('salao.delete');


//*-------------------------------FIM DA ROTA SALAO-------------------------------------------*//


//ROTA CLIENTE//
Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');

// show 
Route::get('/cliente/{id}', [ClienteController::class, 'show'])->name('cliente.show');


//create
Route::get('cliente/create', [ClienteController::class, 'create'])->name('cliente.create');


//store
Route::post('cliente/create', [ClienteController::class, 'store'])->name('cliente.store');


//edit
Route::get('/cliente/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');


//update
Route::put('/cliente/{id}', [ClienteController::class, 'update'])->name('cliente.update');


//delete
Route::delete('/cliente/{id}', [ClienteController::class, 'destroy'])->name('cliente.delete');


//*----------------------------FIM DA ROTA CLIENTE----------------------------------------*//


//ROTA SERVICO//
Route::get('/servico', [ServicoController::class, 'index'])->name('servico.index');

// show 
Route::get('/servico/{id}', [ServicoController::class, 'show'])->name('servico.show');


//create
Route::get('servico/create', [ServicoController::class, 'create'])->name('servico.create');


//store
Route::post('servico/create', [ServicoController::class, 'store'])->name('servico.store');


//edit
Route::get('/servico/{id}/edit', [ServicoController::class, 'edit'])->name('servico.edit');


//update
Route::put('/servico/{id}', [ServicoController::class, 'update'])->name('servico.update');


//delete
Route::delete('/servico/{id}', [ServicoController::class, 'destroy'])->name('servico.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//*-------------------------FIM DA ROTA SERVICO------------------------------------------*//
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
