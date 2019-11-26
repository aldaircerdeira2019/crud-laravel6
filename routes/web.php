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
//Route::get('/painel/produto/test', 'Painel\ProdutoControle@test');
Route::resource('/painel/produto', 'Painel\ProdutoControle');

Route::get('/adiciona_p', 'Painel\ProdutoControle@store');


Route::resource('/painel/usuario', 'Painel\UsuarioControle');

Route::get('/adiciona_u', 'Painel\UsuarioControle@store');



Route::resource('/painel/vendas', 'Painel\VendasControle');
Route::get('/adiciona_v', 'Painel\VendasControle@store');



Route::get('/', function () {
    return view('welcome');
});
