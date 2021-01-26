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

route::apiResource('users', 'App\Http\Controllers\API\usersController');
route::apiResource('events', 'App\Http\Controllers\API\eventsController');
route::apiResource('groups', 'App\Http\Controllers\API\groupsController');
route::apiResource('friends', 'App\Http\Controllers\API\firensController');
route::apiResource('eventactivities', 'App\Http\Controllers\API\eventactivitiesController');
route::apiResource('useractivities', 'App\Http\Controllers\API\useractivitiesController');
route::apiResource('GropuActivities', 'App\Http\Controllers\API\GropuActivitiesController');

Route::post('register', 'App\Http\Controllers\APIRegisterController@register');

Route::post('login', 'App\Http\Controllers\APILoginController@login');