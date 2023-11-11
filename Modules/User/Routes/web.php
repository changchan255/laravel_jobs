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

Route::prefix('user')->middleware('checkLoginUser')->group(function() {
    Route::get('/', 'UserController@index');
    Route::get('favourite', 'UserJobFavouriteController@index')->name('get_user.job.favourite');
    Route::get('favourite/remove/{jobID}', 'UserJobFavouriteController@remove')->name('get_user.job.favourite_remove');
    Route::get('apply-job', 'UserApplyJobController@index')->name('get_user.apply_job.index');
});
