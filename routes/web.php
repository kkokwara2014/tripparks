<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/','FrontController@index')->name('index');
// Route::get('/get-states','FrontController@getStates')->name('get.states');

Route::post('dynamic_states/fetch', 'FrontController@fetch')->name('get.states');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
