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

Route::get('/', [
    'uses' => 'Auth\AuthController@getLogin',
    'as'   => 'login'
]);

Route::get('home', [
    'uses' => 'HomeController@index',
    'as'   => 'home'
]);

require __DIR__ . '/routes/auth.php';
require __DIR__ . '/routes/main.php';
require __DIR__ . '/routes/admissions.php';
require __DIR__ . '/routes/users.php';
require __DIR__ . '/routes/countrys.php';
require __DIR__ . '/routes/states.php';
require __DIR__ . '/routes/citys.php';
require __DIR__ . '/routes/teachers.php';
require __DIR__ . '/routes/partners.php';
require __DIR__ . '/routes/applicants.php';
require __DIR__ . '/routes/employees.php';
require __DIR__ . '/routes/suspensions.php';
require __DIR__ . '/routes/schoolrecords.php';
require __DIR__ . '/routes/schoolrecordType.php';
require __DIR__ . '/routes/period.php';
require __DIR__ . '/routes/career.php';
require __DIR__ . '/routes/area.php';
require __DIR__ . '/routes/subjectMatter.php';
require __DIR__ . '/routes/studiePlans.php';
require __DIR__ . '/routes/schools.php';
