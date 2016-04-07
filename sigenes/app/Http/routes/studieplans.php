<?php

// Views routes
Route::group(['middleware' => ['auth', 'employee']], function () {
    Route::resource('studiesplan', 'StudiesPlanController',
        ['only' => ['index', 'create', 'edit']]);

});

// API routes
Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'employee']], function () {
    Route::post('studiesplan', 'StudiesPlanController@store');
    Route::put('studiesplan', 'StudiesPlanController@update');
    Route::delete('studiesplan/{id}', 'StudiesPlanController@destroy');
    Route::get('studiesplan', 'StudiesPlanController@getAllData');

});
