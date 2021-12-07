<?php

use Illuminate\Http\Request;
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
//API Authentication
Route::post('/login', [\App\Http\Controllers\ProductController::class, 'login']);
Route::post('/register', [\App\Http\Controllers\ProductController::class, 'register']);


//publc
Route::get('/products/index', [\App\Http\Controllers\ProductController::class, 'index']);
Route::get('/products/show/{id}', [\App\Http\Controllers\ProductController::class, 'show']);
Route::get('/products/search/{name}', [\App\Http\Controllers\ProductController::class, 'search']);

//privte
Route::delete('/products/{id}', [\App\Http\Controllers\ProductController::class, 'delete']);

Route::middleware('auth:sanctum', [\App\Http\Controllers\ProductController::class, 'store']);
Route::middleware('auth:sanctum', [\App\Http\Controllers\ProductController::class, 'update']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
