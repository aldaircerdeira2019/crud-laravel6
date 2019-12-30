<?php

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
//Route::get('/painel/usuario/test', 'Painel\UsuarioControle@test');
Route::resource('/painel/produto', 'Painel\ProdutoControle');

//Route::get('/adiciona/p', 'Painel\ProdutoControle@store');


Route::resource('/painel/usuario', 'Painel\UsuarioControle');

//Route::post('/adiciona_usuario', 'Painel\UsuarioControle@store');



Route::resource('/painel/vendas', 'Painel\VendasControle');
//Route::get('/adiciona/v', 'Painel\VendasControle@store');


 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste_cep', function(){
	return view('painel/js/teste_cep');
});