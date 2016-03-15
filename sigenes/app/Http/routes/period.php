<?php
// Views routes
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('period', 'PeriodController',
        ['only' => ['index', 'create', 'show']]);

});

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'admin']], function(){
	Route::post('period', 'PeriodController@store');
	Route::get('period', 'PeriodController@show');
	Route::put('period', 'PeriodController@update');
	Route::delete('period/{id}', 'PeriodController@destroy');
});