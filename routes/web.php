<?php

use Illuminate\Support\Facades\Route;


// Rotas do Website (Área Pública do Cliente)

Route::get('/', 'App\Http\Controllers\WebsiteController@home');
Route::get('/catalogo', 'App\Http\Controllers\WebsiteController@catalogo');
Route::get('/produto', 'App\Http\Controllers\WebsiteController@produto');
Route::get('/carrinho', 'App\Http\Controllers\WebsiteController@carrinho');
Route::get('/checkout', 'App\Http\Controllers\WebsiteController@checkout');
Route::get('/contato', 'App\Http\Controllers\WebsiteController@contato');


// Rotas do Painel Administrativo

Route::get('/admin', function () {
    return view('admin.index');
});

Route::prefix('/admin')->group(function () {
    Route::get('/configuracoes', function () {
        return view('admin.configuracoes');
    });
    Route::get('/clientes', function () {
        return view('admin.clientes');
    });
    Route::get('/produtos', function () {
        return view('admin.produtos');
    });
    Route::get('/pedidos', function () {
        return view('admin.pedidos');
    });
});