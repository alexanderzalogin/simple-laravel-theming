<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\MainController::class, 'index']);
Route::post('/', [\App\Http\Controllers\MainController::class, 'saveTheme']);
Route::get('/contacts', [\App\Http\Controllers\MainController::class, 'contacts']);
