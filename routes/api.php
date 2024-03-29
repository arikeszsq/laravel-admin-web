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

Route::group(['middleware'=>'cors'], function() {
    Route::any('test/add','TestController@add');
    Route::any('test/count','TestController@count');
    Route::any('test/getlists','TestController@getlists');
    Route::any('test/getlistFs','TestController@getlistFs');
});
