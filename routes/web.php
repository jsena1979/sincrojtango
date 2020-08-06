<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/panel', function () {
    return view('panel');
})->name('panel');

Route::get('/procesos/{nombre?}', function ($nombre = null) {
    $proceso = ['Sincronizar Stock', 'Sincronizar Precios', 'Sincronizar Articulos'];
    //return view('procesos',['proceso'=>$procesos,'nombre'=>$nombre]);
    return view('procesos', compact('proceso','nombre'));
})->name('proceso');

Route::get('/pedidos', function () {
    return view('pedidos');
})->name('pedidos');


/*Route::get('panel/{opcion?}', function ($opcion='Sin opcion') {
    return 'Este es el panel de '.$opcion;
})->where('opcion','[0-9]+');

Route::view('inicio','panel',['numero'=>125]);*/
