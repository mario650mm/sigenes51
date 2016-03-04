<?php

// Views routes
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('teachers', 'TeacherController',
        ['only' => ['index', 'create', 'edit']]);

});

// API routes

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'admin']], function () {

    Route::post('teachers', 'TeacherController@store');
    Route::put('teachers', 'TeacherController@update');
    Route::delete('teachers/{id}', 'TeacherController@destroy');
    Route::get('teachersData', 'TeacherController@getAllData');

});
