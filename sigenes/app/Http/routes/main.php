<?php

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'admin']], function(){
	Route::get('mainhalf_year', 'MainController@show_half_year');
	Route::get('mainyears', 'MainController@show_years');
	Route::get('mainstudiesplan', 'MainController@show_studies_plan');
	Route::get('maincareer', 'MainController@show_career');
});

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'student']], function(){
	Route::get('maincareer', 'MainController@show_career');
	Route::get('mainstudent', 'MainController@get_student');
	Route::get('mainsuspension', 'MainController@validation_suspention');
});