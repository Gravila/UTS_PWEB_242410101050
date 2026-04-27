<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'login']);
Route::match(['get','post'],'/dashboard', [PageController::class, 'dashboard']);
Route::get('/profile', [PageController::class, 'profile']);
Route::get('/pengelolaan', [PageController::class, 'pengelolaan']);