<?php

namespace App\Http\Controllers;

class ViewController {

    public function exibirprincipal() {
        return view('dashboard');
    }
    public function view_registra_rua() {
        return view('rua');
    }
    public function view_config_rua() {
        return view('config_rua');
    }
    public function view_registra_bloco() {
        return view('bloco');
    }
    public function view_config_bloco() {
        return view('config_bloco');
    }
    public function view_registra_repositorio() {
        return view('repositorio');
    }
    public function view_config_repositorio() {
        return view('config_repositorio');
    }
    public function view_registra_item() {
        return view('item');
    }
    public function view_config_item() {
        return view('config_item');
    }
    public function view_registra_area(){
        return view ('area');
    }
    public function view_config_area() {
        return view('config_area');
    }
    
}
