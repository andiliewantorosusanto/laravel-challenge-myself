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

Route::prefix('/v1')->group( function() {
    Route::prefix('/user')->group(function () {
        Route::post('/register','Api\v1\UserController@register');
        Route::post('/login','Api\v1\UserController@login');

        Route::middleware('auth:api')->group( function() {
            Route::get('/test','Api\v1\UserController@test');
        });
    });

    Route::prefix('/goal')->group(function () {
        Route::post('');
    });
});
