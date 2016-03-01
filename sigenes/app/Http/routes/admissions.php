<?php
/**
 * Created by PhpStorm.
 * User: taxque
 * Date: 26/02/16
 * Time: 10:57 PM
 */

// Registration routes...

Route::get('admissions_enes_leon', [
    'uses' => 'AdmissionController@index',
    'as'   => 'register'
]);

// API routes

Route::group(['prefix' => 'api/v1'], function () {

    Route::post('admissions', 'AdmissionController@store');
    Route::get('admissions/createPdfAdmission/{id}', 'AdmissionController@createPdfAdmission');

});