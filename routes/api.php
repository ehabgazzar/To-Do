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
Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');

Route::get('list', 'ListController@index');
Route::get('list/{id}', 'ListController@show');
Route::post('list/create', 'ListController@store');
Route::post('list/{id}/edit', 'ListController@update');
Route::post('list/{id}/delete', 'ListController@delete');

Route::get('list', 'ItemController@index');
Route::get('list/{listid}', 'ItemController@show');
Route::post('list/{listid}/item', 'ItemController@store');
Route::post('list/{listid}/item/{itemid}/edit', 'ItemController@update');
Route::post('list/{listid}/item/{itemid}/delete', 'ItemController@delete');