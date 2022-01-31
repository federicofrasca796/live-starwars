<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('posts', PostController::class);
});
/* 
Model Post
Admin/PostController
Post table migration
    -id
    - image
    - title
    - subtitle
    - body
    - timestamps
    ---- author_id (One to many)
    ---- category_id (One to many)


Post seeder

*/