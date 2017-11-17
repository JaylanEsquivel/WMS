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

Route::get('/usuarios', 'ViewController@view_registra_usuarios')->name('Registro-de-usuarios');
Route::get('/usuarios/usuarios-config', 'ViewController@view_config_usuarios')->name('Config-de-usuarios');

Route::get('/config-conta', 'ViewController@view_config_conta')->name('Config-de-Conta');
Route::get('/config-conta/editar-conta', 'ViewController@view_config_conta_editar')->name('Config-de-Conta-editar');

// ROTAS DE ENTRADA E SAIDAS DE PRODUTOS/ITEM 

Route::get('/entrada', 'ViewController@view_registra_rua')->name('Entrada-de-produtos');

// ROTAS DE ENTRADA E SAIDAS DE PRODUTOS/ITEM 
// ROTAS DE ÁREAS 

Route::get('/area','ViewController@view_registra_area')->name('Registro-de-Area');
Route::get('/area/area-config', 'ViewController@view_config_area')->name('Config-de-area');

// ROTAS DE ÁREAS
// ROTAS DE entrada/saida

Route::get('/entrada','ViewController@view_entrada')->name('Entrada-item');
Route::get('/saida','ViewController@view_saida')->name('Saida-item');
 
// ROTAS DE entrada/saida
// ROTAS DE INVENTARIO

Route::get('/inventario-geral','ViewController@view_inventario_geral')->name('Inventario-geral');
Route::get('/inventario-area','ViewController@view_inventario_area')->name('Inventario-area');

// ROTAS DE INVENTARIO

// ROTAS DE RELÁTORIOS 

Route::get('/relatorio-entrada','ViewController@view_relatorio_entrada')->name('Relatorio_entrada');
Route::get('/relatorio-saida','ViewController@view_relatorio_saida')->name('Relatorio_saida');
Route::get('/relatorio-item','ViewController@view_relatorio_item')->name('Relatorio_item');

// ROTAS DE RELÁTORIOS 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
