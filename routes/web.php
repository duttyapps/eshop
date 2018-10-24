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

Route::get('/', 'Home@index');

Route::get('/products', 'Products@all');
Route::get('/products/view/{id}', 'Products@view');

Route::get('/cart', 'Cart@all');
Route::post('/cart/add', 'Cart@add');
