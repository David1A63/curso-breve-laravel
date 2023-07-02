<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'App\Http\Controllers\InicioController@index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Ejemplo de creación de rutas:
Route::get('/texto', function() {
    return "<center><h1>Este es un texto de prueba</h1></center>";
});

//Ruta con arreglo
Route::get('/arreglo', function() {
    $arreglo = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes'];
    return $arreglo;
});
//Arreglo asociativo
Route::get('/arreglo1', function() {
    $arreglo = [
        'id' => '1',
        'Nombre' => 'David'
    ];
    return $arreglo;
});
//Ruta con parametros
Route::get('/nombre/{nombre}', function($nombre){
    return "<center><h1>Mi Nombre es: ".$nombre."</h1></center>";
});
//Ruta con parametros por default
Route::get('/cliente/{cliente?}', function($cliente = 'Cliente General'){
    return "<center><h1>Cliente: ".$cliente."</h1></center>";
});
//Redireccion de rutas
Route::get('/ruta1', function() {
    return "<center><h1>Vista de la Ruta 1</h1></center>";
})->name('rno1');

Route::get('/ruta2', function() {
    return redirect()->route('rno1');
});

//Consulta de usuario por ID con restricción
Route::get('/usuario/{usuario}', function($usuario) {
    return "<center><h1>El usuario es: ".$usuario."</h1></center>";
})->where("usuario", '[A-z]+');

//Ejemplo de vistas
Route::get('/vista1', function () {
    return view('vista1', ['Nombre' => 'David']);
});

Route::get('/vista2', function () {
    return "<center><h1>Esta es la vista2</h1></center>";
});

//Uso de fachadas
/*if(View::exists('vista2')){
    Route::get('/', function(){
        return view('vista2');
    });
}else{
    Route::get('/', function(){
        return '<center><h1>La vista no existe</h1></center>';
    });
}*/


