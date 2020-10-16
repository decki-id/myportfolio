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

Route::get('/', 'PagesController@index')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/certificates', 'PagesController@certificates')->name('certificates');
Route::get('/portfolios', 'PagesController@portfolios')->name('portfolios');
Route::get('/blogs', 'PagesController@blogs')->name('blogs');
Route::get('/welcome', 'PagesController@welcome')->name('welcome');

// Route::get('/students', 'StudentsController@index');
// Route::get('/students/create', 'StudentsController@create');
// Route::post('/students', 'StudentsController@store');
// Route::get('/students/{student}', 'StudentsController@show');
// Route::get('/students/{student}/edit', 'StudentsController@edit');
// Route::patch('students/{student}', 'StudentsController@update');
// Route::delete('/students/{student}', 'StudentsController@destroy');
Route::resource('/students', 'StudentsController');

Route::get('/helpdeck', 'HelpdeckController@index');

// Auth::routes();
Route::get('/instadeck/login', 'Auth\LoginController@showLoginForm')->name('instadeck.login');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/instadeck/register', 'Auth\RegisterController@showRegistrationForm')->name('instadeck.register');
Route::post('register', 'Auth\RegisterController@register')->name('register');

Route::get('/instadeck', 'InstadeckPostsController@index')->name('instadeck.home');
Route::get('/instadeck/post/create', 'InstadeckPostsController@create')->name('post.create');
Route::post('/instadeck/post', 'InstadeckPostsController@store')->name('post.store');
Route::get('/instadeck/post/{post}', 'InstadeckPostsController@show')->name('post.show');
Route::get('/instadeck/profile/{user}', 'InstadeckProfilesController@index')->name('profile.show');
Route::get('/instadeck/profile/{user}/edit', 'InstadeckProfilesController@edit')->name('profile.edit');
Route::patch('/instadeck/profile/{user}', 'InstadeckProfilesController@update')->name('profile.update');
Route::post('/instadeck/follow/{user}', 'InstadeckFollowsController@store');