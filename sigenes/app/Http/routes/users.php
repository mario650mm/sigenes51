<?php

// Views routes
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('users', 'UserController',
        ['only' => ['index', 'create', 'edit']]);
    Route::get('users/report',
        ['as' => 'admin.usersReport','uses' => 'UserController@filterView']);


});

// API routes of Admin

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'admin']], function () {

    Route::get('filterReport',
        ['as' => 'admin.filterReport','uses' =>'UserController@filtersReport']);
    Route::post('users', 'UserController@store');
    Route::put('users', 'UserController@update');
    Route::delete('users/{id}', 'UserController@destroy');
    Route::get('users', 'UserController@getAllData');

});

// API routes of Employee

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'employee']], function () {
    Route::get('users', 'UserController@getAllData');

});
