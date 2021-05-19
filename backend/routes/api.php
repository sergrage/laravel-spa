<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('stats', function() {
	return [
		'series' => 200,
		'lessons' => 1300,
		'img' => 'https://mdn.mozillademos.org/files/14295/CORS_principle.png',
	];
})->middleware('auth:api');