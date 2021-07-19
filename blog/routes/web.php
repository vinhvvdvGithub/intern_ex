<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ROUTE REGISTER
Route::get('/dangki','OveAuth\RegisterController@create')->name('dangki');
Route::post('/dangki','OveAuth\RegisterController@store')->name('dangki');

//ROUTE LOGIN
Route::get('/dangnhap','OveAuth\LoginController@getLogin')->name('dangnhap');
Route::post('/dangnhap','OveAuth\LoginController@postLogin')->name('dangnhap');