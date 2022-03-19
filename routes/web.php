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
Route::get('cliente-create', 'App\Http\Controllers\ClienteController@create')->name('cliente-create');
Route::post('cliente-store', 'App\Http\Controllers\ClienteController@store')->name('cliente-store');


//produto
Route::get('produto-create', 'App\Http\Controllers\PedidoController@create')->name('produto-create');
Route::post('produto-store', 'App\Http\Controllers\PedidoController@store')->name('produto-store');
