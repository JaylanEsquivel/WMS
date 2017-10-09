<?php

Route::get('/', function () {
    return view('principal');
});
Route::get('/principal', 'ViewController@exibirprincipal');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
