<?php

// Authentication routes...
Route::get('auth/login', [
    'uses' => 'Auth\AuthController@getLogin',
    'as'   => 'login'
]);
Route::post('auth/login', 'Auth\AuthController@postLogin');


Route::get('auth/logout', [
    'uses' => 'Auth\AuthController@getLogout',
    'as'   => 'logout'
]);


// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

