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

Route::get('posts', 'App\Http\Controllers\PostController@index')->name('posts.index');
Route::get('post-create', 'App\Http\Controllers\PostController@create')->name('posts.create');
Route::get('post-edit', 'App\Http\Controllers\PostController@edit')->name('posts.edit');

Route::get('categories', 'App\Http\Controllers\CategoryController@index')->name('categories.index');
Route::get('category-create', 'App\Http\Controllers\CategoryController@create')->name('categories.create');
Route::get('category-edit', 'App\Http\Controllers\CategoryController@edit')->name('categories.edit');
