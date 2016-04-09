<?php

// Views routes
Route::group(['middleware' => ['auth', 'employee']], function () {
    Route::resource('schools', 'SchoolController',
        ['only' => ['index', 'create', 'edit']]);

});

// API routes

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'employee']], function () {

    Route::post('schools', 'SchoolController@store');
    Route::put('schools', 'SchoolController@update');
    Route::delete('schools/{id}', 'SchoolController@destroy');
    Route::get('schools', 'SchoolController@getAllData');

});
