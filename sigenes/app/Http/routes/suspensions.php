<?php
/**
*	create:
*/

// Route prefix API/V1
Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'admin']], function(){
    Route::get('suspenall', 'SuspensionController@showAll');
    Route::put('suspen', 'SuspensionController@update');
    Route::put('suspendelete', 'SuspensionController@destroy');
});

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'employee']], function(){
    Route::get('suspenall', 'SuspensionController@showAll');
    Route::put('suspen', 'SuspensionController@update');
    Route::put('suspendelete', 'SuspensionController@destroy');
});

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'student']], function(){
	Route::post('suspen', 'SuspensionController@store');
    Route::get('suspen', 'SuspensionController@getAllData');
    Route::get('suspartn/{id}', 'SuspensionController@getStudentData');
    Route::get('suspen/{id}', 'SuspensionController@show');
    Route::get('susperiod', 'SuspensionController@getAllDataPeriod');
    Route::put('suspen', 'SuspensionController@update');
});

//Views

//permission student
Route::group(['middleware' => ['auth', 'student']], function(){
	Route::resource('student/low/pdf', 'PdfSuspensionController@index');
    Route::resource('student/low', 'SuspensionController@create');
    Route::resource('student/credential', 'PdfCredentialController@index');
});

//permission admin
Route::group(['middleware' => ['auth', 'admin']], function(){
	Route::resource('admin/low', 'SuspensionController@index');
});

//permission employee
Route::group(['middleware' => ['auth', 'employee']], function(){
	Route::resource('admin/low', 'SuspensionController@index');
});