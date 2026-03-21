<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RandomController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', [PageController::class, 'index']);

Route::get('/me', [PageController::class, 'me']);

Route::get('/impressum', [PageController::class, 'imp']);

Route::get('/seite', [PageController::class, 'about']);

Route::get('/contact', [PageController::class, 'contact']);

// https://inventory.test/imp/<script>alert('alert');</script>
Route::get('/imp/{info}', [PageController::class, 'impressum']);

Route::get('/items', [ItemController::class, 'index']);

Route::get('student', [RandomController::class, 'select']);

Route::get('/rooms', [RoomController::class, 'index'])
    ->name('rooms')->middleware(['auth']);

Route::post('/rooms', [RoomController::class, 'store'])
    ->name('rooms.store')->middleware(['auth']);

Route::get('/schools', [SchoolController::class, 'index'])
    ->name('schools')->middleware(['auth']);

Route::post('/schools', [SchoolController::class, 'store'])
    ->name('schools.store')->middleware(['auth']);

Route::get('/random', [RandomController::class, 'select'])
    ->name('random')
    ->middleware(['auth']);

Route::post('/random', [RandomController::class, 'select'])
    ->name('students.select')
    ->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
