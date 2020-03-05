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

//Product Routes
Route::get('product', 'ProductController@index');
Route::get('product/seeds', 'ProductController@getSeeds');
Route::get('product/planters', 'ProductController@getPlanters');
Route::get('product/tools', 'ProductController@getTools');
Route::get('product/soil', 'ProductController@getSoil');

