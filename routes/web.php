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

Route::get('/', 'WelcomeController@index');
Route::get('ourstores', 'OurstoresController@index');
Route::get('employees', 'EmployeesController@index');
Route::get('company', 'CompanyController@index');
Route::get('{id}', 'My1Controller@show')->name('showFacts');