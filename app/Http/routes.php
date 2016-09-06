<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', "DefaultController@index");

Route::get('/products/edit', "ProductsController@lists");
Route::get('/products/{name}', "ProductsController@index");
Route::auth();

Route::get('/dashboard', 'Dashboard\DashboardController@index');
