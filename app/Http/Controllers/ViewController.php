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
    public function view_registra_prateleira() {
        return view('prateleira');
    }
    public function view_config_prateleira() {
        return view('config_prateleira');
    }
    public function view_registra_area(){
        return view ('area');
    }
    
}
