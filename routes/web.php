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
/**
 * Routes for user
 * @controller
 */
Route::get('/', function () {
    return view('user.pages.list');
});
/**
 * Routes for admin
 * @controller
 */
Route::get('/admin', function () {
    return view('admin.pages.list');
});
