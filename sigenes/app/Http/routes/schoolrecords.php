<?php

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'admin']], function(){
	Route::get('allrecords', 'SchoolrecordController@show');
	Route::put('recorddelete', 'SchoolrecordController@destroy');
	Route::put('records', 'SchoolrecordController@update');
});

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'employee']], function(){
	Route::get('allrecords', 'SchoolrecordController@show');
	Route::put('recorddelete', 'SchoolrecordController@destroy');
	Route::put('records', 'SchoolrecordController@update');
});

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'student']], function(){
	Route::post('records', 'SchoolrecordController@store');
    Route::get('records', 'SchoolrecordController@getAllData');
    Route::get('recordsStudent', 'SchoolrecordController@getStudent');
    Route::get('recordstype', 'SchoolrecordController@getRecordType');
});

Route::group(['middleware' => ['auth', 'student']], function(){
	Route::resource('student/records', 'SchoolrecordController@create');
});

Route::group(['middleware' => ['auth', 'admin']], function(){
	Route::resource('admin/records/recordprint', 'SchoolrecordController@constancia_estudio');
	Route::resource('admin/records', 'SchoolrecordController@index');
});

Route::group(['middleware' => ['auth', 'employee']], function(){
	Route::resource('admin/records/recordprint', 'SchoolrecordController@constancia_estudio');
	Route::resource('admin/records', 'SchoolrecordController@index');
});