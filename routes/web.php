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

Route::get('/', 'PagesController@home')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/certificates', 'PagesController@certificates')->name('certificates');
Route::get('/portfolios', 'PagesController@portfolios')->name('portfolios');
Route::get('/blogs', 'PagesController@blogs')->name('blogs');

// Route::get('/myportfolio/students', 'StudentsController@index');
// Route::post('/myportfolio/students', 'StudentsController@store');
// Route::get('/myportfolio/students/create', 'StudentsController@create');
// Route::get('/myportfolio/students/{student}', 'StudentsController@show');
// Route::patch('myportfolio/students/{student}', 'StudentsController@update');
// Route::delete('/myportfolio/students/{student}', 'StudentsController@destroy');
// Route::get('/myportfolio/students/{student}/edit', 'StudentsController@edit');

Route::resource('/myportfolio/students', 'StudentsController');