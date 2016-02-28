<?php
/**
 * Created by PhpStorm.
 * User: taxque
 * Date: 27/02/16
 * Time: 11:42 PM
 */

Route::group(['prefix' => 'api/v1'], function () {

    Route::get('citysbystate/{id}', 'CityController@getCitysByState');

});
