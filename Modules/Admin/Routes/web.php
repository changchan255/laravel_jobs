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

use Modules\Admin\Http\Controllers\AdminApplyJobController;

Route::prefix('admin')->middleware('checkLoginAdmin')->group(function() {
    Route::get('/', 'AdminDashboardController@index')->name('get_admin.index');
    Route::prefix('career')->group(function () {
        Route::get('/', 'AdminCareerController@index')->name('get_admin.career.index');
        Route::get('create', 'AdminCareerController@create')->name('get_admin.career.create');
        Route::post('create', 'AdminCareerController@store');
        Route::get('/update{id}', 'AdminCareerController@edit')->name('get_admin.career.update');
        Route::post('/update{id}', 'AdminCareerController@update');
    });
    Route::prefix('attribute')->group(function () {
        Route::get('/', 'AdminAttributeController@index')->name('get_admin.attribute.index');
    });
    Route::prefix('job')->group(function () {
        Route::get('/', 'AdminJobController@index')->name('get_admin.job.index');
        Route::get('/update{id}', 'AdminJobController@edit')->name('get_admin.job.update');
        Route::post('/update{id}', 'AdminJobController@update');
    });
    Route::prefix('user')->group(function () {
        Route::get('/', 'AdminUserController@index')->name('get_admin.user.index');
    });
    Route::prefix('employer')->group(function () {
        Route::get('/', 'AdminEmployerController@index')->name('get_admin.employer.index');
    });
    Route::prefix('apply-job')->group(function () {
        Route::get('/', [AdminApplyJobController::class,'index'])->name('get_admin.apply_job.index');
        Route::get('delete/{id}', 'AdminApplyJobController@delete')->name('get_admin.apply_job.delete');
    });
});
