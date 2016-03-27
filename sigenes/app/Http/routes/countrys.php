<?php
/**
 * Created by PhpStorm.
 * User: taxque
 * Date: 27/02/16
 * Time: 08:35 PM
 */

// API routes

Route::group(['prefix' => 'api/v1'], function () {

    Route::get('countrys', 'CountryController@getAllData');
    Route::get('getNameCountry/{id}', 'CountryController@getNameCountry');
});