<?php

Route::get('/', 'ViewController@exibirprincipal');
Route::get('/principal', 'ViewController@exibirprincipal');


Route::get('/rua', 'ViewController@view_registra_rua')->name('Registro-de-Rua');
Route::get('/rua/rua-config', 'ViewController@view_config_rua')->name('Config-de-rua');

Route::get('/bloco', 'ViewController@view_registra_bloco')->name('Registro-de-bloco');
Route::get('/bloco/bloco-config', 'ViewController@view_config_bloco')->name('Config-de-bloco');

Route::get('/repositorio', 'ViewController@view_registra_repositorio')->name('Registro-de-repositorio');
Route::get('/repositorio/repositorio-config', 'ViewController@view_config_repositorio')->name('Config-de-repositorio');

Route::get('/item', 'ViewController@view_registra_item')->name('Registro-de-item');
Route::get('/item/item-config', 'ViewController@view_config_item')->name('Config-de-item');
// ROTAS DE ENTRADA E SAIDAS DE PRODUTOS/ITEM 

Route::get('/entrada', 'ViewController@view_registra_rua')->name('Entrada-de-produtos');

// ROTAS DE ENTRADA E SAIDAS DE PRODUTOS/ITEM 
// ROTAS DE ÁREAS 

Route::get('/area','ViewController@view_registra_area')->name('Registro-de-Area');
Route::get('/area/area-config', 'ViewController@view_config_area')->name('Config-de-area');

// ROTAS DE ÁREAS
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
