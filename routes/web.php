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
//Route::get('/',[\App\Http\Controllers\Api\user\HomeUserController::class, 'index']);
//
//Route::get('/about',[\App\Http\Controllers\Api\user\HomeUserController::class, 'about']);
//
//
//Route::get('/{any}', [\App\Http\Controllers\SinglePageController::class,'index'])->where('any', '.*');
//
//Route::prefix('api')->group(function (){
//});
//
//Route::prefix('user')->group(function (){
//
//});

//Route::get('/{any}', function () {
//    return view('user.layout_user');
//})->where('any', '.*');

Route::view('/{any?}', 'user.layout_user')->where('any', '.*');

