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

// Route::get('/','FrontController@index')->name('index');
// Route::get('/get-states','FrontController@getStates')->name('get.states');

Route::post('dynamic_states/fetch', 'FrontController@fetch')->name('get.states');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','FrontController@myform')->name('index');

Route::get('myform/ajax/{id}','FrontController@myformAjax')->name('myform.ajax');


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'admin']], function () {


    Route::get('/', 'AdminController@index')->name('dashboard.index');

    Route::resource('admin','AdminController');
   
    
    Route::get('all/admins', 'AdminController@admins')->name('all.admin');
    
    Route::get('admins/{id}/show', 'AdminController@show')->name('admins.show');
    Route::post('admins/{id}/activate', 'AdminController@activate')->name('admins.activate');
    Route::post('admins/{id}/deactivate', 'AdminController@deactivate')->name('admins.deactivate');

    // Route::get('contact','ContactController@index')->name('contact.index');
    // Route::delete('contact/{id}','ContactController@destroy')->name('contact.destroy');

    Route::get('user/profile', 'UserController@profileimage')->name('user.profile');
    Route::post('user/profile', 'UserController@updateprofileimage')->name('user.profile.update');
});
