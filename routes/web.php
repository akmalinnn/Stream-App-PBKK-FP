<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StreamController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\TvController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

Route::view('/home', 'home')->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/movies', [StreamController::class, 'index'])->name('stream.index');
    Route::get('/movie/{watch}', [StreamController::class, 'show'])->name('movies.show');

    Route::get('/shows', [TvController::class, 'index'])->name('shows.index');
    Route::get('/show/{watch}', [TvController::class, 'show'])->name('shows.show');

    Route::get('/favorites', [FavoritesController::class, 'show'])->name('favorites.index');
    Route::post('/favorites', [FavoritesController::class, 'store'])->name('favorites.store');
    Route::get('/favorites', [FavoritesController::class, 'sort'])->name('favorites.index');
});

require __DIR__.'/auth.php';
