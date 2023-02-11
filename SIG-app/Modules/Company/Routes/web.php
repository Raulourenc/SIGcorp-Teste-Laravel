<?php
use App\Http\Controllers\ProvisionServer;
//use Modules\Company\Http\Controllers\JobController;
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

Route::middleware('auth')->prefix('company')->group(function() {
    Route::get('/user', 'UserController@index');
    Route::resource('/job', JobController::class);
    Route::resource('/info', InfoController::class);
    Route::post('/app', 'ApplicationController@store')->name('application.store');
    Route::get('/filter', 'JobController@filter')->name('filter');
    Route::get('/listInfo', 'InfoController@liInfo')->name('listInfo');
    Route::delete('/deleteAll', 'JobController@deleteAll')->name('deleteAll');
    Route::get('/cpv', 'JobController@candidatesPerVacancy')->name('cpv');
    Route::get('/listApplications', 'InfoController@listApplications')->name('listApplications');
});


