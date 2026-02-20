<?php

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

Route::get('/seite', function(){
    return view('about');
});

Route::get('/imp', function() {
    $vorname = 'Max';
    $nachname = 'Muster';
    $alter = 17;

    // In der View (imp.blade.php) sind die Variablen vorname, nachname und
    // age verfügbar. Es beliebige Varibalen weritergereicht werden.
    return view('imp', [
        'vorname' => $vorname,
        'nachname' => $nachname,
        'age' => $alter
    ]);
});

// https://inventory.test/imp/<script>alert('alert');</script>
Route::get('/imp/{info}', function($info) {
    $vorname = 'Max';
    $nachname = 'Muster';
    $alter = 17;

    // In der View (imp.blade.php) sind die Variablen vorname, nachname und
    // age verfügbar. Es beliebige Varibalen weritergereicht werden.
    return view('imp', [
        'vorname' => $vorname,
        'nachname' => $nachname,
        'age' => $alter,
        'info' => "<script>window.top.location = 'https://www.google.at';</script>"
    ]);
});
