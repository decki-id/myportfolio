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


// Route::get('/myportfolio/students', 'StudentsController@index');
// Route::get('/myportfolio/students/create', 'StudentsController@create');
// Route::post('/myportfolio/students', 'StudentsController@store');
// Route::get('/myportfolio/students/{student}', 'StudentsController@show');
// Route::get('/myportfolio/students/{student}/edit', 'StudentsController@edit');
// Route::patch('myportfolio/students/{student}', 'StudentsController@update');
// Route::delete('/myportfolio/students/{student}', 'StudentsController@destroy');
Route::resource('/myportfolio/students', 'StudentsController');

Auth::routes();

Route::get('/myportfolio/helpdeck', 'HelpdeckController@index');

Route::get('/myportfolio/instadeck', 'InstadeckController@index')->name('instadeck.home');
Route::get('/myportfolio/instadeck/profile/{user}', 'InstadeckProfilesController@index')->name('profile.show');
Route::get('/myportfolio/instadeck/profile/{user}/edit', 'InstadeckProfilesController@edit')->name('profile.edit');
Route::patch('/myportfolio/instadeck/profile/{user}', 'InstadeckProfilesController@update')->name('profile.update');
Route::get('/myportfolio/instadeck/post/create', 'InstadeckPostsController@create')->name('post.create');
Route::post('/myportfolio/instadeck/post', 'InstadeckPostsController@store')->name('post.store');
Route::get('/myportfolio/instadeck/post/{post}', 'InstadeckPostsController@show')->name('post.show');