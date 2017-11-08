<?php

Route::get('/', 'ViewController@exibirprincipal');
Route::get('/principal', 'ViewController@exibirprincipal');

Route::get('/rua', 'ViewController@view_registra_rua')->name('Registro-de-Rua');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
