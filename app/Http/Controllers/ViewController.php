<?php

namespace App\Http\Controllers;

class ViewController {

    public function exibirprincipal() {
        return view('dashboard');
    }
    public function view_registra_rua() {
        return view('rua');
    }
    
    
}
