<?php
// Views routes
Route::group(['middleware' => ['auth', 'employee']], function () {
    Route::resource('career', 'CareerController',
        ['only' => ['index', 'create', 'show']]);

});

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'employee']], function(){
    Route::get('getNameCareer/{id}', 'CareerController@getNameCareer');
	Route::post('career', 'CareerController@store');
	Route::get('career', 'CareerController@show');
	Route::put('career', 'CareerController@update');
	Route::delete('career/{id}', 'CareerController@destroy');
});

Route::group(['prefix' => 'api/v1'], function(){
    Route::get('careeradmission', 'CareerController@show');
});