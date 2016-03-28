<?php
// Views routes
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('schooltype', 'SchoolrecordTypeController',
        ['only' => ['index', 'create', 'edit', 'show']]);

});

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'admin']], function(){
	Route::post('recordtype', 'SchoolrecordTypeController@store');
	Route::get('recordtype', 'SchoolrecordTypeController@show');
	Route::put('recordtype', 'SchoolrecordTypeController@update');
	Route::delete('recordtype/{id}', 'SchoolrecordTypeController@destroy');
});