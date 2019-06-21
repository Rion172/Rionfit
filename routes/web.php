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

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/choice', 'UserController@update')->name('choice');

Route::get('/gewichtaanpassen', 'WeightController@create')->name('gewichtaanpassen');

Route::post('/gewichten', 'Weightcontroller@store')->name('gewichten');

Route::get('/musclebuilding', 'SchemeController@index')->name('musclebuilding');

Route::get('/weightloss', 'SchemeController@index')->name('weightloss');