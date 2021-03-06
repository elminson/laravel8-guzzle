<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\CatsController;
use App\Http\Controllers\UsersController;
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
Route::get('/', function ()
{
	return view('welcome');
});

//AppServiceProvider::class

// Posts
//Route::get('/posts', 'PostsController@index');
Route::get('/posts', [PostsController::class, 'index']);

//Route::get('/posts/{id}', 'PostsController@show');
Route::get('/posts/{id}', [PostsController::class, 'show']);

// Users
//Route::get('/users', 'UsersController@index');
Route::get('/users', [UsersController::class, 'index']);

//Route::get('/users/{id}', 'UsersController@show');
Route::get('/users/{id}', [UsersController::class, 'show']);

// Photos
//Route::get('/photos', 'PhotosController@index');
Route::get('/photos', [PhotosController::class, 'index']);

//Route::get('/photos/{id}', 'PhotosController@show');
Route::get('/photos/{id}', [PhotosController::class, 'show']);


// Cats
//Route::get('/cats', 'CatsController@index');
Route::get('/cats', [CatsController::class, 'index']);