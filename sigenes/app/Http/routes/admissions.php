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

/*Route::get('auth/register', [
    'uses' => 'Auth\AuthController@getRegister',
    'as'   => 'register'
]);
Route::post('auth/register', 'Auth\AuthController@postRegister');*/
