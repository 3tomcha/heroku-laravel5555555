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
//     // return view('welcome');
//     // echo "here i am";
//     exit;
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/article', 'ArticleController@index');
// Route::get('/article/create', 'ArticleController@create');
// Route::post('/article/create', 'ArticleController@store');

Route::resource('article', 'ArticleController');
