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

Route::get('/', 'Front\MainController@home');
Route::get('/post/{id}', 'Front\MainController@showPost');
Route::get('/categories', 'Front\MainController@categories');
Route::get('/category/{id}', 'Front\MainController@showCategory');
Route::get('/contact', 'Front\MainController@contact');
Route::get('/about', 'Front\MainController@about');