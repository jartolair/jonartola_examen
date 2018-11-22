<?php

Route::view('/', "enunciado");
Route::get('/clientes', 'ClientesController@index');
Route::get('/hoteles', 'HotelesController@dePrimera');
Route::get('/nuevo', function(){
	return view('cliente.create');
});
Route::post('/guardarCliente', 'ClientesController@guardar');
Route::get('/reserva/{id}', 'ClientesController@reservas');