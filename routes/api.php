<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('guest')->group(function () {

    Route::post('login', [\App\Http\Controllers\UserController::class, 'login']);
//    Route::post('/register', [\App\Http\Controllers\UserController::class, 'register']);
//    Route::get('/forget', [\App\Http\Controllers\UserController::class, 'forget']);
//    Route::post('/forget-confirm', [\App\Http\Controllers\UserController::class, 'forget_confirm']);
//    Route::post('/reset-password ', [\App\Http\Controllers\UserController::class, 'reset_password']);

});

Route::middleware('auth:sanctum')->group(function () {


//Home
    Route::get('home', [\App\Http\Controllers\HomeController::class, 'index']);

//Users
//    Route::post('update', [\App\Http\Controllers\UserController::class, 'update']);


});
