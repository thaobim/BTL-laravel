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

use App\Http\Controllers\ViewController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', 'ViewController@PageIndex' );
Route::get('/index/about-us', 'ViewController@PageAboutUs' );
Route::get('/index/blog', 'ViewController@PageBlog' );
Route::get('/index/cart', 'ViewController@PageCart' );
Route::get('/index/account', 'ViewController@PageAccount' );
Route::get('/index/admin', 'ViewController@PageAdmin');

