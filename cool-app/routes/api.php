<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use GuzzleHttp\Client;

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

Route::middleware('auth:api')->get('/user', function (Request $request)
{

	return $request->user();
});

Route::get('/', function ()
{

	$client = new Client([
							 // Base URI is used with relative requests
							 'base_uri' => 'https://jsonplaceholder.typicode.com',
							 // You can set any number of default request options.
							 'timeout' => 2.0,
						 ]);

});
