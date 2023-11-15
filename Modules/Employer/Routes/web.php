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

Route::prefix('employer')->middleware('checkLoginUser')->group(function() {
    Route::get('/', 'EmployerDashboardController@index');
    Route::get('job', 'EmployerJobController@index');
    Route::prefix('job')->group(function() {
        Route::get('', 'EmployerJobController@index')->name('get_employer.job.index');
        Route::get('create', 'EmployerJobController@create')->name('get_employer.job.create');
        Route::post('create', 'EmployerJobController@store');

        Route::get('update/{id}','EmployerJobController@edit')->name('get_employer.job.update');
        Route::post('update/{id}','EmployerJobController@update');
    });

    Route::prefix('company')->group(function() {
        Route::get('', 'EmployerCompanyController@index')->name('get_employer.company.index');
//        Route::get('create', 'EmployerCompanyController@create')->name('get_employer.company.create');
        Route::post('store', 'EmployerCompanyController@store')->name('get_employer.company.store');
    });
    Route::prefix('apply-job')->group(function() {
        Route::get('', 'EmployerApplyJobController@index')->name('get_employer.apply_job.index');
        Route::get('delete/{id}', 'EmployerApplyJobController@delete')->name('get_employer.apply_job.delete');
        Route::get('success/{id}', 'EmployerApplyJobController@success')->name('get_employer.apply_job.success');
        Route::get('cancel/{id}', 'EmployerApplyJobController@cancel')->name('get_employer.apply_job.cancel');
        Route::get('note/{id}', 'EmployerApplyJobController@note')->name('get_employer.apply_job.note');
        Route::post('note/{id}', 'EmployerApplyJobController@postNote');
    });
});
