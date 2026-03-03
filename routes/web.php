<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [PageController::class, 'index']);

Route::get('/me', [PageController::class, 'me']);

Route::get('/impressum', [PageController::class, 'imp']);

Route::get('/seite', [PageController::class, 'about']);

Route::get('/contact', [PageController::class, 'contact']);

// https://inventory.test/imp/<script>alert('alert');</script>
Route::get('/imp/{info}', [PageController::class, 'impressum']);

Route::get('/items', [ItemController::class, 'items']);
