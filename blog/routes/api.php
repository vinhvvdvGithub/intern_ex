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

//API
//API ROUTE REGISTER
Route::post('/dangki','OveAuth\ApiUserController@register')->name('dangki');
// Route::get('/dangki','OveAuth\ApiUserController@create')->name('dangki');


//API ROUTE LOGIN
Route::post('/dangnhap','OveAuth\ApiUserController@login')->name('api/dangnhap');
// Route::get('/dangnhap','OveAuth\ApiUserController@create')->name('api/dangnhap');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
