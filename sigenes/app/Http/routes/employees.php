<?php
// Views routes
Route::group(['middleware' => ['auth', 'employee']], function () {
    Route::resource('employees', 'EmployeeController',
        ['only' => ['index', 'create', 'edit']]);
    Route::get('employeeteacher', 'EmployeeController@getEmployeeTeacher');

});
