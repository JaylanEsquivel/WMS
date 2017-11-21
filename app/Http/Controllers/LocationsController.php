<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationsController extends Controller{
    
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function local_registrar() {
        $local = Location::paginate(5);
        return view('local', ['local' => $local]);
    }
    public function cadastro_local() {
        $rua = \Request::input('rua');
        $estande = \Request::input('est');
        $prateleira = \Request::input('pra');
        $repositorio = \Request::input('rep');
        
        $novo = new Location;
        $novo->street = $rua;
        $novo->shelf = $estande;
        $novo->floor = $prateleira;
        $novo->repository = $repositorio;
        $novo->save();
        
        $msg = 1;
        
        return redirect('/local')->with('msg', $msg);
    }
    
}
