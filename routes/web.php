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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// our Route to  store  the  customer  message
Route::post('/form', 'CustomerController@store');
  Route::resource('/admin', 'CustomerController')->middleware('auth');
