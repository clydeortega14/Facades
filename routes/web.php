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

	$google2fa = app('pragmarx.google2fa');

    return view('welcome');
});

/* Basic implementation */
Route::get('/postcards', 'PostCardController@ordinaryIntance');
/* Introduction to Facades */
Route::get('/facades', 'PostCardController@basicFacade');

/* Facade another version */
Route::get('/bike', 'BikeController@index');
Route::get('/cart', 'CartController@index');

/* AUTH SCAFFOLDING ROUTES */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
