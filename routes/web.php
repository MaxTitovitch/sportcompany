<?php

Route::get('/', 'WelcomeController@index');
Route::get('ourstores', 'OurstoresController@index');
Route::get('employees', 'EmployeesController@index');
Route::get('company', 'CompanyController@index');
Route::match(['get', 'post'], 'formok', 'FormController@show');
Route::get('form', 'FormController@index');
Route::get('article/{id}', 'My1Controller@show')->name('showFacts')->where('id', '[1-3]');