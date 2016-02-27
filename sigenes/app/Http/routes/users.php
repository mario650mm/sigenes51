<?php

// Views routes
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('users', 'UserController',
        ['only' => ['index', 'create', 'edit']]);

});

// API routes

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'admin']], function () {

    Route::post('users', 'UserController@store');
    Route::put('users', 'UserController@update');
    Route::delete('users/{id}', 'UserController@destroy');
    Route::get('users', 'UserController@getAllData');

});
