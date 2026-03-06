<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function() {
    return "Hallo, Welt!";
});

Route::get('/about', function() {
   return "<html><title>About</title><body><h1>About me</h1></body></html>";
});

Route::get('/me', function() {
    return view('test');
});

Route::get('/impressum', function(){
    return view('impressum');
});

Route::get('/overview', function(){
    return view('overview');
});

Route::get('/oasch', function(){
    return view('oasch');
});

Route::get('/imp', [PageController::class, 'imp']);

Route::get('/imp/{info}', function($info){
    $vorname='Max';
    $nachname='Max';
    $alter=20;

    return view('imp', [
        'vorname' => $vorname,
        'nachname' => $nachname,
        'alter' => $alter,
        'info' => "Der PC funktioniert perfekt"
    ]);
});

Route::get('/impressum/{info}', [PageController::class, 'impressum']);

Route::get('/contact', [PageController::class, 'contact'])
    ->name('pages.contact');

Route::get('/items', [ItemController::class, 'index']);

Route::get('/student', [\App\Http\Controllers\RandomController::class, 'select']);
