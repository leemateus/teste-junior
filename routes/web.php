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

Route::get('/', function () {
    return view('base');
});

//cliente
Route::get('cliente-create', 'ClienteController@create')->name('create-cliente');
Route::post('cliente-store', 'ClienteController@store')->name('store-cliente');
Route::get('cliente-menu', 'ClienteController@menu')->name('menu-cliente');
Route::get('cliente-index', 'ClienteController@index')->name('index-cliente');
Route::get('cliente-edit/{cliente}', 'ClienteController@edit')->name('edit-cliente');
Route::post('cliente-update/{cliente}', 'ClienteController@update')->name('update-cliente');


//produto
Route::get('produto-create', 'ProdutoController@create')->name('create-produto');
Route::post('produto-store', 'ProdutoController@store')->name('store-produto');
Route::get('produto-menu', 'ProdutoController@menu')->name('menu-produto');
Route::get('produto-index', 'ProdutoController@index')->name('index-produto');
Route::get('produto-edit/{produto}', 'ProdutoController@edit')->name('edit-produto');
Route::post('produto-update/{produto}', 'ProdutoController@update')->name('update-produto');

//pedido
Route::get('pedido-menu', 'PedidoController@menu')->name('menu-pedido');
Route::get('pedido-selectProduto', 'PedidoController@selectProduto')->name('selectProduto-pedido');
Route::get('pedido-selectProdutoQuant/{produtoId}', 'PedidoController@selectProdutoQuant')->name('selectProdutoQuant-pedido');
