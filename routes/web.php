<?php

use App\Http\Controllers\Ajax\AjaxFavouriteJobController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\SearchJobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'Auth', 'prefix' => 'account'], function () {
    Route::post('login', [LoginController::class, 'postLogin'])->name('post.login');
    Route::post('register', [RegisterController::class, 'postRegister'])->name('post.register');
    Route::get('logout',[LoginController::class, 'getLogout'])->name('get.logout');
});
Route::get('', [HomeController::class, 'index'])->name('get.home');
Route::get('tim-kiem.html', [SearchJobController::class, 'index'])->name('get.search.job');
Route::get('job/nganh-nghe-{slug}.html', [CareerController::class, 'index'])->name('get.career.index');
Route::get('job/{slug}-{hashID}.html', [JobController::class, 'index'])->name('get.job')
    ->where(['slug' => '[a-z-]+','hashID' => '[a-z0-9A-Z]+']);

Route::group(['namespace' => 'Ajax', 'prefix' => 'ajax'], function () {
    Route::get('job/{hashID}', [AjaxFavouriteJobController::class, 'addFavourite'])->name('ajax_get.add.favourite');
});
