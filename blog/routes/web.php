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

//GAME
//ADD NEW GAME
// Route::get('/list-game','Game\GameController@index')->name('list-game');
// Route::get('/add-game','Game\GameController@create');
// Route::post('/add-game','Game\GameController@store')->name('add-game');

// //EDIT GAME
// Route::get('/edit-game/{id}','Game\GameController@edit')->name('edit-game');
// Route::post('/edit-game/{id}','Game\GameController@update')->name('edit-game');



// //DELETE GAME
// Route::post('/delete-game/{id}','Game\GameController@destroy')->name('delete-game');



