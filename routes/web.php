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

//  Home
Route::get('/','BasicController@home');

//  About
Route::get('about','BasicController@about');

//  Service
Route::get('service','BasicController@service');

//  Contact
Route::get('contact','BasicController@contact');

//  Login
Route::get('login','BasicController@login');

//  Read Employee
Route::get('employees','BasicController@employees');

//  Read Employee with Eloquent
Route::get('employeelist','BasicController@employeelist');

//  Read Employee with DeptManager
Route::get('view_deptmanager','EmployeeController@view_deptmanager');



