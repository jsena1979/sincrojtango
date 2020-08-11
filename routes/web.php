<?php

Route::get('/','PagesController@inicio')->name('inicio');
Route::post('/','PagesController@crear')->name('consultasApi.crear');
Route::get('/detalle/{id}','PagesController@detalle')->name('consultasApi.detalle');
Route::get('/editar/{id}','PagesController@editar')->name('consultasApi.editar');
Route::put('/editar/{id}','PagesController@update')->name('consultasApi.update');
Route::delete('/eliminar/{id}','PagesController@eliminar')->name('consultasApi.eliminar');;
Route::get('/panel','PagesController@panel')->name('panel');
Route::get('/procesos/{nombre?}', 'PagesController@procesos')->name('proceso');

Route::get('/pedidos', function () {
    return view('pedidos');
})->name('pedidos');


/*Route::get('panel/{opcion?}', function ($opcion='Sin opcion') {
    return 'Este es el panel de '.$opcion;
})->where('opcion','[0-9]+');

Route::view('inicio','panel',['numero'=>125]);*/
