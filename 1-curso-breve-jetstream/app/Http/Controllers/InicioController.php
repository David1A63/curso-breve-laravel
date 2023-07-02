<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    /*Index normal
    public function index(){
        return view('vista1');
    }*/

    //Petición Http
    public function index(Request $peticion){
        $arreglo = ['Nombre' => $peticion->query('Nombre', ' ')];
        return view('vista1')->with($arreglo);
    }
}
