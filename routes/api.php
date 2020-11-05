<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\ApideckPost;
use App\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/apideck/posts', function () {
//     $post = ApideckPost::create([
//         'title' => 'My First Post',
//         'slug' => 'my-first-post'
//     ]);
//     return $post;
// });

Route::prefix('apideck')->group(function () {
    Route::apiResource('users', 'ApideckUserController');
    Route::apiResource('posts', 'ApideckPostsController');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});