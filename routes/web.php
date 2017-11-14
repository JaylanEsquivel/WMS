<?php

Route::get('/', 'ViewController@exibirprincipal');
Route::get('/principal', 'ViewController@exibirprincipal');


Route::get('/rua', 'ViewController@view_registra_rua')->name('Registro-de-Rua');
Route::get('/rua/rua-config', 'ViewController@view_config_rua')->name('Config-de-rua');

Route::get('/prateleira', 'ViewController@view_registra_prateleira')->name('Registro-de-Prateleira');
Route::get('/prateleira/prateleira-config', 'ViewController@view_config_prateleira')->name('Config-de-Prateleira');


// ROTAS DE ENTRADA E SAIDAS DE PRODUTOS/ITEM 

Route::get('/entrada', 'ViewController@view_registra_rua')->name('Entrada-de-produtos');

// ROTAS DE ENTRADA E SAIDAS DE PRODUTOS/ITEM 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
