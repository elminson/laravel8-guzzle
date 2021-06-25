<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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

//Route::get('/posts', 'PostsController@index');
Route::get('/posts', [PostsController::class, 'index']);

//Route::get('/posts/{id}', 'PostsController@show');
Route::get('/posts/{id}', [PostsController::class, 'show']);

