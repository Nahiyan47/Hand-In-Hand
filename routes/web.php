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

Route::get('/','handinhand@index');
Route::get('/members','handinhand@members');

Route::get('/joinus','joinus@index');
Route::post('/joinus/','joinus@store');
Route::get('/dashboard','joinus@dashboard');
Route::get('/user/show/{id}', 'user@show');
Route::get('/user/view/{id}', 'user@view');
Route::patch('/user/update/{id}', 'user@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
