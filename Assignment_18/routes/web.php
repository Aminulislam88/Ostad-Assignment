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

Route::delete('/posts/{id}/delete', 'PostController@delete')->name('posts.delete');
Route::get('/categories/{id}/posts', 'CategoryController@getPosts')->name('categories.posts');

