<?php

use GuzzleHttp\Client;
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
Route::get('/', function ()
{

	return view('welcome');

});

Route::get('/posts', function ()
{

	$client = new Client([
							 // Base URI is used with relative requests
							 'base_uri' => 'https://jsonplaceholder.typicode.com',
							 // You can set any number of default request options.
							 'timeout' => 2.0,
						 ]);

	$response = $client->request('GET', 'posts');

	$posts = json_decode($response->getBody()->getContents());

	return view('posts.index', compact('posts'));

});
