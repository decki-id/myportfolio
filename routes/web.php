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

Route::get('/', 'PagesController@home');

Route::get('/myportfolio/students', 'StudentsController@index');
Route::get('/myportfolio/students/create', 'StudentsController@create');
Route::get('/myportfolio/students/{student}', 'StudentsController@show');
Route::post('/myportfolio/students', 'StudentsController@store');
