<?php

// Views routes
Route::group(['middleware' => ['auth', 'employee']], function () {
    Route::resource('partners', 'PartnerController',
        ['only' => ['index', 'create', 'edit']]);

});

// API routes

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'employee']], function () {

    Route::post('partners', 'PartnerController@store');
    Route::put('partners', 'PartnerController@update');
    Route::delete('partners/{id}', 'PartnerController@destroy');
    Route::get('partners', 'PartnerController@getAllEmployee');
    Route::get('partners', 'PartnerController@getAllData');

});
