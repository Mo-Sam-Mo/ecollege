<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>['auth']], function(){
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::get('/controlCourses', 'App\Http\Controllers\DashboardController@getCo')->name('controlCourses');
    Route::get('/controlStudents', 'App\Http\Controllers\DashboardController@getSt')->name('controlStudents');
    Route::get('/controlDoctors', 'App\Http\Controllers\DashboardController@getDr')->name('controlDoctors');
    Route::get('/addCourses', 'App\Http\Controllers\DashboardController@addCo')->name('addCourses');
    Route::get('/addDoctors', 'App\Http\Controllers\DashboardController@addDr')->name('addDoctors');
    Route::get('/permission', 'App\Http\Controllers\DashboardController@getPermission')->name('permission');
    Route::get('/roles', 'App\Http\Controllers\DashboardController@getRoles')->name('roles');
    Route::get('/controlUsers', 'App\Http\Controllers\DashboardController@getUsers')->name('controlUsers');
    Route::get('/addUsers', 'App\Http\Controllers\DashboardController@addUsers')->name('addUsers');
    Route::get('/studentProfile', 'App\Http\Controllers\DashboardController@stuProfile')->name('stuProfile');



    Route::get('/logout', 'App\Http\Controllers\DashboardController@logout');
});



require __DIR__.'/auth.php';
