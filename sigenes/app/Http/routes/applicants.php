<?php

// Views routes
Route::group(['middleware' => ['auth', 'employee']], function () {
    Route::resource('applicants', 'ApplicantController',
        ['only' => ['index', 'create', 'edit', 'show']]);

});

// API routes

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'employee']], function () {

    Route::post('applicants', 'ApplicantController@store');
    Route::put('applicants', 'ApplicantController@update');
    Route::delete('applicants/{id}', 'ApplicantController@destroy');
    Route::get('applicants/{id}', 'ApplicantController@showApplicantApi');
    Route::get('applicants/document/{id}', 'ApplicantController@getDocumentApplicant');
    Route::get('applicants', 'ApplicantController@getAllApplicants');

});
