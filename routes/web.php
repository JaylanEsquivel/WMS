<?php

Route::get('/', 'ViewController@exibirprincipal');
Route::get('/principal', 'ViewController@exibirprincipal');


Route::get('/rua', 'ViewController@view_registra_rua')->name('Registro-de-Rua');


// ROTAS DE ENTRADA E SAIDAS DE PRODUTOS/ITEM 

Route::get('/entrada', 'ViewController@view_registra_rua')->name('Entrada-de-produtos');

// ROTAS DE ENTRADA E SAIDAS DE PRODUTOS/ITEM 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
