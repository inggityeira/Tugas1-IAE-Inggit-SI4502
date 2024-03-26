<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\halamanController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\teamController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [halamanController::class, 'home']);
Route::get('/event', [eventController::class, 'event']);
Route::get('/team', [teamController::class, 'team']);