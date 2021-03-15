<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/employees', "EmployeeController@index") -> name('index');
Route::get('/show/{id}', 'Employeecontroller@show') -> name('emp-show');
Route::get('/create/employees', 'Employeecontroller@create') -> name('emp-create');
Route::post('/create/employees', 'Employeecontroller@store') -> name('emp-store');
Route::get('/delete/employees/{id}', 'Employeecontroller@destroy') -> name('emp-delete');
Route::get('/edit/employee/{id}', 'Employeecontroller@edit') -> name('emp-edit');
Route::post('/update/employee/{id}', 'Employeecontroller@update') -> name('emp-update');
