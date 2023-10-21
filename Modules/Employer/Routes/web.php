<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('employer')->group(function() {
    Route::get('/', 'EmployerDashboardController@index');
    Route::get('job', 'EmployerJobController@index');
    Route::prefix('job')->group(function() {
        Route::get('', 'EmployerJobController@index')->name('get_employer.job.index');
        Route::get('create', 'EmployerJobController@create')->name('get_employer.job.create');
        Route::post('create', 'EmployerJobController@store');
    });

    Route::prefix('company')->group(function() {
        Route::get('', 'EmployerCompanyController@index')->name('get_employer.company.index');
//        Route::get('create', 'EmployerCompanyController@create')->name('get_employer.company.create');
        Route::post('store', 'EmployerCompanyController@store')->name('get_employer.company.store');
    });
});
