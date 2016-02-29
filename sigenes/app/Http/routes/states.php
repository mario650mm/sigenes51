<?php
/**
 * Created by PhpStorm.
 * User: taxque
 * Date: 27/02/16
 * Time: 10:54 PM
 */


Route::group(['prefix' => 'api/v1'], function () {

    Route::get('statesbycountry/{id}', 'StateController@statesbycountry');

});