<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [
    'uses' => 'HomeController@index',
    'as'   => 'home'
]);

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

// Registration routes...
Route::get('auth/register', [
    'uses' => 'Auth\AuthController@getRegister',
    'as'   => 'register'
]);
Route::post('auth/register', 'Auth\AuthController@postRegister');


// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'UserController',
        ['only' => ['index', 'create', 'edit']]);
    Route::resource('teachers', 'TeacherController',
        ['only' => ['index', 'create', 'edit']]);

});

Route::group(['prefix' => 'api/v1', 'middleware' => 'auth'], function () {

    Route::post('users', 'UserController@store');
    Route::put('users', 'UserController@update');
    Route::delete('users/{id}', 'UserController@destroy');
    Route::get('users', 'UserController@getAllData');

    Route::post('teachers', 'TeacherController@store');
    Route::put('teachers', 'TeacherController@update');
    Route::delete('teachers/{id}', 'TeacherController@destroy');
    Route::get('teachers', 'TeacherController@getAllData');

});