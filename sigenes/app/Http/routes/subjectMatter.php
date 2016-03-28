<?php
// Views routes
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('subjectMatter', 'SubjectMatterController',
        ['only' => ['index', 'create', 'show']]);

});

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'admin']], function(){
	Route::post('subjectmatter', 'SubjectMatterController@store');
	Route::get('subjectmatter', 'SubjectMatterController@show');
	Route::put('subjectmatter', 'SubjectMatterController@update');
	Route::delete('subjectmatter/{id}', 'SubjectMatterController@destroy');
});