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
Route::post('/dangnhap','OveAuth\ApiUserController@login')->name('dangnhap');
// Route::get('/dangnhap','OveAuth\ApiUserController@create')->name('api/dangnhap');

//API GAME 
//api get list game
Route::get('/list-game','Game\ApiGameController@index')->name('list-game')->middleware('auth:api');

//api create new game 
Route::post('/create-game','Game\ApiGameController@store')->name('create-game')->middleware('auth:api');
//api edit game 
Route::post('/edit-game/{id}','Game\ApiGameController@update')->name('edit-game')->middleware('auth:api');
//api xoa game 
Route::post('/delete-game/{id}','Game\ApiGameController@destroy')->name('delete-game')->middleware('auth:api');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
