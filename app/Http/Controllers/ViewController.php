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
    public function view_registra_usuarios(){
        return view ('usuarios');
    }
    public function view_config_usuarios() {
        return view('config_usuarios');
    }
    public function view_config_conta() {
        return view('config_conta');
    }
    public function view_config_conta_editar() {
        return view('config_conta_editar');
    }
    
    // CONTROLE DE RELATORIOS
    public function view_relatorio_entrada() {
        return view('relatorio_entrada');
    }
    public function view_relatorio_saida() {
        return view('relatorio_saida');
    }
    public function view_relatorio_item() {
        return view('relatorio_item');
    }
        // CONTROLE DE RELATORIOS
    // entradas e saidas
    
    public function view_entrada() {
        return view('requisicao_entrada');
    }
    public function view_saida() {
        return view('requisicao_saida');
    }
    
    // entradas e saidas
    // inventario
    
    public function view_inventario_geral() {
        return view('inventario_geral');
    }
    public function view_inventario_area() {
        return view('inventario_area');
    }
    
    // inventario

    
}
