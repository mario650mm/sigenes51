<?php
// vistas que pueden ver los usuarios
// vistas visibles para estudientes
Route::group(['middleware' => ['auth', 'student']], function(){
	Route::resource('extraordinary', 'ExtraordinaryTestController',
		['only' => ['create', 'showpdf']]);
});

//vistas visibles para administrador
Route::group(['middleware' => ['auth', 'admin']], function(){
	Route::resource('extraordinary', 'ExtraordinaryTestController',
		['only' => ['index', 'report']]);
});

//vistas para empleados de vetanille
Route::group(['middleware' => ['auth', 'employee']], function(){
	Route::resource('extraordinary', 'ExtraordinaryTestController',
		['only' => ['index']]);
});

//API REST para manego de la informacion
Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'admin']], function(){
	Route::get('extraordinary', 'ExtraordinaryTestController@show');
	Route::put('extraordinary', 'ExtraordinaryTestController@update');
	Route::delete('extraordinary/{id}', 'ExtraordinaryTestController@destroy');
});

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'student']], function(){
	Route::post('extraordinary', 'ExtraordinaryTestController@store');
	Route::get('extraordinary', 'ExtraordinaryTestController@showinfostuden');
	Route::put('extraordinary', 'ExtraordinaryTestController@update');
});