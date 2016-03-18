<?php
Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'admin']], function(){
	Route::post('area', 'StudyareaController@store');
	Route::get('area', 'StudyareaController@show');
	Route::put('area', 'StudyareaController@update');
	Route::delete('area/{id}', 'StudyareaController@destroy');
});