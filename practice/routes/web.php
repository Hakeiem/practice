<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhoneController;

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

Route::resource('/posts', PostController::class);
Route::resource('/users', UserController::class);
Route::resource('/users/phone', PhoneController::class);
//Route::post('/users/phoneAssign', [PhoneController::class, 'create']);

//Route::DELETE('delete-post/{id}', [PostController::class, 'destory']);
