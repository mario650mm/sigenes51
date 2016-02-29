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


/*
 *  Routes of user model
 */
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('users', 'UserController',
        ['only' => ['index', 'create', 'edit']]);

});
Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'admin']], function () {

    Route::post('users', 'UserController@store');
    Route::put('users', 'UserController@update');
    Route::delete('users/{id}', 'UserController@destroy');
    Route::get('users', 'UserController@getAllData');

});
/*
 * End Routes of user model
 */


Route::group(['prefix' => 'api/v1', 'middleware' => 'auth'], function () {

    Route::post('suspen', 'SuspensionController@store');
    Route::put('suspen', 'SuspensionController@update');
    Route::put('suspendelete', 'SuspensionController@destroy');
    Route::get('suspen', 'SuspensionController@getAllData');
    Route::get('suspartn/{id}', 'SuspensionController@getStudentData');
    Route::get('suspen/{id}', 'SuspensionController@show');
    Route::get('suspenall', 'SuspensionController@showAll');
    Route::get('susperiod', 'SuspensionController@getAllDataPeriod');

});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('student/low/pdf', 'PdfSuspensionController@index');
    Route::resource('student/low', 'SuspensionController@create');
    Route::resource('student/records', 'SchoolrecordController@create');

    Route::resource('admin/records', 'SchoolrecordController@index');
    Route::resource('admin/low', 'SuspensionController@index');


});



Route::group(['prefix' => 'api/v1', 'middleware' => 'auth'], function () {

    Route::post('records', 'SchoolrecordController@store');
    Route::put('records', 'SchoolrecordController@update');
    Route::put('recorddelete', 'SchoolrecordController@destroy');
    Route::get('records', 'SchoolrecordController@getAllData');
    Route::get('recordsStudent', 'SchoolrecordController@getStudent');
    Route::get('allrecords', 'SchoolrecordController@show');
    Route::get('recordstype', 'SchoolrecordController@getRecordType');

});