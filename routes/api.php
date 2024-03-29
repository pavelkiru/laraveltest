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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth',
    'namespace' => 'App\Http\Controllers',

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

Route::group(['namespace' => 'App\Http\Controllers\Post', 'middleware' => 'jwt.auth'], function () {


    Route::prefix('posts')->group(function () {
        Route::get('/', 'IndexController');
        Route::get('/', 'IndexController');
        Route::get('/', 'IndexController');
        Route::get('/', 'IndexController');
        Route::get('/', 'IndexController');



        Route::get('/', 'IndexController');
        Route::get('/create', 'CreateController');
        Route::post('/', 'StoreController');
        Route::get('/{post}', 'ShowController');
        Route::get('/{post}/edit', 'EditController');
        Route::patch('/{post}', 'UpdateController');
        Route::delete('/{post}', 'DestroyController');
    });
});
























