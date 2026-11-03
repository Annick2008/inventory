<?php

use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/schools', function(Request $request){
    $schools = School::all();

    return $schools->toArray();
});

Route::get('/schools/{school}', function(School $school){
    return $school;
})->middleware(['throttle:6,1']);
