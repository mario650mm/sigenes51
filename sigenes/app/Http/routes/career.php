<?php
// Views routes
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('career', 'CareerController',
        ['only' => ['index', 'create', 'show']]);

});

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'admin']], function(){
	Route::post('career', 'CareerController@store');
	Route::get('career', 'CareerController@show');
	Route::put('career', 'CareerController@update');
	Route::delete('career/{id}', 'CareerController@destroy');
});