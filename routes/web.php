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

//Laravel Welcome Page
Route::get('/welcome', 'PageController@welcome')->name('welcome');

// Website main pages
Route::get('/', 'PageController@index')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/certificates', 'PageController@certificates')->name('certificates');
Route::get('/portfolios', 'PageController@portfolios')->name('portfolios');
Route::get('/blogs', 'PageController@blogs')->name('blogs');