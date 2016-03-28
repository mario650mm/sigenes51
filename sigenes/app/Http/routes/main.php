<?php

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'admin']], function(){
	Route::get('mainhalf_year', 'MainController@show_half_year');
	Route::get('mainyears', 'MainController@show_years');
	Route::get('mainstudiesplan', 'MainController@show_studies_plan');
	Route::get('main', 'MainController@destroy');
});