<?php

use Illuminate\Support\Facades\Route;
use App\Mail\InstadeckNewUserWelcomeMail;

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

// Students portfolio
Route::resource('/', 'StudentController');
Route::get('/{student}', 'StudentController@show')->name('show');
Route::patch('/{student}', 'StudentController@update')->name('update');
Route::delete('/{student}', 'StudentController@destroy')->name('destroy');
Route::get('/{student}/edit', 'StudentController@edit')->name('edit');