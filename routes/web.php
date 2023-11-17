<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\ProfileController;
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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/teste', function () {
    return view('teste');
})->middleware(['auth', 'verified'])->name('teste');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/themes', [ThemeController::class, 'index'])->name('themes');
    Route::get('/themes/create', [ThemeController::class, 'create'])->name('themes.create');
    Route::post('/themes', [ThemeController::class, 'store'])->name('themes.store');
    Route::get('/themes/edit/{id}', [ThemeController::class, 'edit'])->name('themes.edit');
    Route::put('/themes/update/{id}', [ThemeController::class, 'update'])->name('themes.update');
    Route::delete('/themes/{id}', [ThemeController::class, 'destroy'])->name('themes.destroy');

    Route::get('/levels', [LevelController::class, 'index'])->name('levels');
    Route::get('/levels/create', [LevelController::class, 'create'])->name('levels.create');
    Route::post('/levels', [LevelController::class, 'store'])->name('levels.store');
    Route::get('/levels/edit/{id}', [LevelController::class, 'edit'])->name('levels.edit');
    Route::put('/levels/update/{id}', [LevelController::class, 'update'])->name('levels.update');
    Route::delete('/levels/{id}', [LevelController::class, 'destroy'])->name('levels.destroy');
});

require __DIR__.'/auth.php';
