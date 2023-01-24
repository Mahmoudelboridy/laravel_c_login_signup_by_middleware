<?php

use App\Http\Controllers\AuthController;
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

Route::group(['prefix'=>'en'],function(){
    Route::get('register',[AuthController::class,'registration'])->middleware('nowlogin');
    Route::post('/register',[AuthController::class,'registeruser'])->name('signup');
    Route::get('login',[AuthController::class,'login'])->middleware('nowlogin');
    Route::post('/login',[AuthController::class,'loginuser'])->name('login');
    Route::get('/dashboard',[AuthController::class,'dashboard'])->middleware('checklogin');
    Route::get('/test',[AuthController::class,'test'])->middleware('checklogin');
    Route::get('/logout',[AuthController::class,'logout']);




});