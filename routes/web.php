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
// Route::get('/students', 'StudentsController@index');
// Route::get('/students/create', 'StudentsController@create');
// Route::post('/students', 'StudentsController@store');
// Route::get('/students/{student}', 'StudentsController@show');
// Route::get('/students/{student}/edit', 'StudentsController@edit');
// Route::patch('/students/{student}', 'StudentsController@update');
// Route::delete('/students/{student}', 'StudentsController@destroy');
Route::resource('/students', 'StudentsController');

// HelpDeck portfolio
Route::get('/helpdeck', 'HelpdeckController@index');

// InstaDeck portfolio
// Auth::routes();
Route::get('/instadeck/test-email', function () {
    Mail::to('herdiawand@yahoo.co.id')->send(new InstadeckNewUserWelcomeMail());
    return new InstadeckNewUserWelcomeMail();
});
Route::get('/instadeck/register', 'InstadeckRegisterController@showRegistrationForm')->name('instadeck.register');
Route::post('register', 'InstadeckRegisterController@register')->name('register');
Route::get('/instadeck/login', 'InstadeckLoginController@showLoginForm')->name('instadeck.login');
Route::post('login', 'InstadeckLoginController@login')->name('login');
Route::get('/instadeck/instagram-api', 'InstadeckInstagramApiController@index')->name('instadeck.api');
Route::get('/instadeck/instagram-api/callback', 'InstadeckInstagramApiController@callback')->name('instadeck.api.callback');
Route::post('logout', 'InstadeckLoginController@logout')->name('logout');
Route::get('/instadeck', 'InstadeckPostsController@index')->name('instadeck.home');
Route::get('/instadeck/post/browse', 'InstadeckPostsController@browse')->name('post.browse');
Route::get('/instadeck/post/create', 'InstadeckPostsController@create')->name('post.create');
Route::post('/instadeck/post', 'InstadeckPostsController@store')->name('post.store');
Route::get('/instadeck/post/{post}', 'InstadeckPostsController@show')->name('post.show');
Route::get('/instadeck/profile/{user}', 'InstadeckProfilesController@index')->name('profile.show');
Route::get('/instadeck/profile/{user}/edit', 'InstadeckProfilesController@edit')->name('profile.edit');
Route::patch('/instadeck/profile/{user}', 'InstadeckProfilesController@update')->name('profile.update');
Route::post('/instadeck/follow/{user}', 'InstadeckFollowsController@store');