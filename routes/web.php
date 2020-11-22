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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' => ['auth','password.confirm']], function () {
    Route::view('insert','insert');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/insert', 'HomeController@store')->name('store');
    Route::view('/show','show');
    Route::get('/show','HomeController@GetStudentData');
});


