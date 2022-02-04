<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->get('/games', [\App\Http\Controllers\GameController::class, 'index']);
Route::middleware('api')->get('/randomgames', [\App\Http\Controllers\GameController::class, 'random']);

Route::middleware('api')->get('/favorites', [\App\Http\Controllers\FavoriteController::class, 'favorites']);
