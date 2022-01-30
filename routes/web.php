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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/articles', 'App\Http\Controllers\ArticleController@index');

Route::get('/articles/detail/{id}', 'App\Http\Controllers\ArticleController@detail');

Route::get('/products', 'App\Http\Controllers\Product\ProductController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/articles/add', 'App\Http\Controllers\ArticleController@add'); 
Route::post('/articles/add', 'App\Http\Controllers\ArticleController@create'); 
Route::get('/articles/delete/{id}', 'App\Http\Controllers\ArticleController@delete');