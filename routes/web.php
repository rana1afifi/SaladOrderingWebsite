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

//Welcome Page Router
Route::get('/', function () {
    return view('welcome');
});

//Authentication Routers
Auth::routes();

//Home Router after Registration
Route::get('/home', 'HomeController@index');

//Confirmation Routers
Route::get('/confirmation', 'Auth\ConfirmationController@showConfirmationForm');
Route::post('/confirmation', 'Auth\ConfirmationController@confirm');

//Menu Router
Route ::get('/menu', 'MenuController@showMenu');

//Order Routers
Route ::get('/order', 'OrderController@showMenu');
Route::post('/order', 'OrderController@order');

//Blocked
Route::get('/blocked', function () {
    return view('blocked');
});

//Rating
//Order Routers
Route ::get('/rate', 'RateController@showMenu');
Route::post('/rate', 'RateController@rate');