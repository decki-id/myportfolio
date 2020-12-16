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

// Website's main pages
Route::get('/', 'PagesController@index')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/certificates', 'PagesController@certificates')->name('certificates');
Route::get('/portfolios', 'PagesController@portfolios')->name('portfolios');
Route::get('/blogs', 'PagesController@blogs')->name('blogs');
Route::get('/welcome', 'PagesController@welcome')->name('welcome');

// Students portfolio
Route::resource('/students', 'StudentsController');

// SisDeck portfolio
Route::get('/sisdeck/login', 'SisdeckLoginController@showLoginForm')->name('sisdeck.login.form');
Route::post('sisdeck-login', 'SisdeckLoginController@login')->name('sisdeck.login');
Route::get('/sisdeck/register', 'SisdeckRegisterController@showRegistrationForm')->name('sisdeck.register.form');
Route::post('sisdeck-register', 'SisdeckRegisterController@register')->name('sisdeck.register');
Route::post('sisdeck-logout', 'SisdeckLoginController@logout')->name('sisdeck.logout');
Route::get('/sisdeck', 'SisdeckController@index');
Route::get('/sisdeck/create', 'SisdeckController@create');
Route::post('/sisdeck', 'SisdeckController@store');
Route::get('/sisdeck/{student}', 'SisdeckController@show');
Route::get('/sisdeck/{student}/edit', 'SisdeckController@edit');
Route::patch('/sisdeck/{student}', 'SisdeckController@update');
Route::delete('/sisdeck/{student}', 'SisdeckController@destroy');

// HelpDeck portfolio
Route::get('/helpdeck', 'HelpdeckController@index');

// InstaDeck portfolio
// Auth::routes();
Route::get('/instadeck/test-email', function () {
    Mail::to('herdiawand@yahoo.co.id')->send(new InstadeckNewUserWelcomeMail());
    return new InstadeckNewUserWelcomeMail();
});
Route::get('/instadeck/instagram-api', 'InstadeckInstagramApiController@index')->name('instadeck.api');
Route::get('/instadeck/instagram-api/callback', 'InstadeckInstagramApiController@callback')->name('instadeck.api.callback');
Route::get('/instadeck/login', 'InstadeckLoginController@showLoginForm')->name('instadeck.login.form');
Route::post('instadeck-login', 'InstadeckLoginController@login')->name('instadeck.login');
Route::get('/instadeck/register', 'InstadeckRegisterController@showRegistrationForm')->name('instadeck.register.form');
Route::post('instadeck-register', 'InstadeckRegisterController@register')->name('instadeck.register');
Route::post('instadeck-logout', 'InstadeckLoginController@logout')->name('instadeck.logout');
Route::get('/instadeck', 'InstadeckPostsController@index')->name('instadeck.home');
Route::get('/instadeck/post/create', 'InstadeckPostsController@create')->name('instadeck.post.create');
Route::post('/instadeck/post', 'InstadeckPostsController@store')->name('instadeck.post.store');
Route::get('/instadeck/post/{post}', 'InstadeckPostsController@show')->name('instadeck.post.show');
Route::get('/instadeck/profile/{username}', 'InstadeckProfilesController@index')->name('instadeck.profile.show');
Route::get('/instadeck/profile/{username}/edit', 'InstadeckProfilesController@edit')->name('instadeck.profile.edit');
Route::patch('/instadeck/profile/{username}', 'InstadeckProfilesController@update')->name('instadeck.profile.update');
Route::post('/instadeck/follow/{user}', 'InstadeckFollowsController@store');
Route::get('/instadeck/explore', 'InstadeckSearchController@index')->name('instadeck.explore');
Route::get('/instadeck/search', 'InstadeckSearchController@search')->name('instadeck.search');