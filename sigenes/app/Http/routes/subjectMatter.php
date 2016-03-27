<?php
// Views routes
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('subjectMatter', 'SubjectMatterController',
        ['only' => ['index', 'create', 'show']]);

});

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'admin']], function(){
	Route::post('subjectMatter', 'SubjectMatterController@store');
	Route::get('subjectMatter', 'SubjectMatterController@show');
	Route::put('subjectMatter', 'SubjectMatterController@update');
	Route::delete('subjectMatter/{id}', 'SubjectMatterController@destroy');
});