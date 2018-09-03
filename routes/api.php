<?php

use Illuminate\Http\Request;

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

// List Articles
Route::get('/articles', 'ArticlesController@index');

// List Single Article
Route::get('/articles/{id}', 'ArticlesController@show');

// Create new Article
Route::post('/articles', 'ArticlesController@store');

// Update Article
Route::put('/articles', 'ArticlesController@store');

// Delete Article
Route::delete('/articles/{id}', 'ArticlesController@destroy');
