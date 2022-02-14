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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::get('search', [\App\Http\Controllers\SearchController::class, 'index'])->name('search');
    Route::get('show/{id}', [\App\Http\Controllers\GameController::class, 'show'])->name('show');

    Route::get('favorite', [\App\Http\Controllers\FavoriteController::class, 'index'])->name('favorite');
    Route::post('favorite/store', [\App\Http\Controllers\FavoriteController::class, 'store'])->name('store');
    Route::delete('favorite/destroy/{id}', [\App\Http\Controllers\FavoriteController::class, 'destroy'])->name('destroy');
    Route::get('/linkstorage', function () {
        Artisan::call('storage:link');
    });
});
