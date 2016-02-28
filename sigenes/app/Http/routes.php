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

require __DIR__ . '/routes/auth.php';
require __DIR__ . '/routes/admissions.php';
require __DIR__ . '/routes/users.php';
require __DIR__ . '/routes/countrys.php';
require __DIR__ . '/routes/states.php';
require __DIR__ . '/routes/citys.php';

Route::group(['prefix' => 'api/v1', 'middleware' => 'auth'], function () {

    Route::post('suspen', 'SuspensionController@store');
    Route::put('suspen', 'SuspensionController@update');
    Route::delete('suspen/{id}', 'SuspensionController@destroy');
    Route::get('suspen', 'SuspensionController@getAllData');
    Route::get('suspartn/{id}', 'SuspensionController@getStudentData');
    Route::get('suspen/{id}', 'SuspensionController@show');
    Route::get('susperiod', 'SuspensionController@getAllDataPeriod');

});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('student/low', 'SuspensionController@create');
    Route::resource('student/records', 'SchoolrecordController@create');

});

Route::group(['prefix' => 'api/v1', 'middleware' => 'auth'], function () {

    Route::post('records', 'SchoolrecordController@store');
    Route::put('records', 'SchoolrecordController@update');
    Route::delete('records/{id}', 'SchoolrecordController@destroy');
    Route::get('records', 'SchoolrecordController@getAllData');
    Route::get('recordsStudent', 'SchoolrecordController@getStudent');
    Route::get('records/{id}', 'SchoolrecordController@show');
    Route::get('recordstype', 'SchoolrecordController@getRecordType');

});