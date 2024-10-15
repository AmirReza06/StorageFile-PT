<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class , 'index'])->name('home');
Route::get('/test', [\App\Http\Controllers\SaveFileController::class , 'index'])->name('test');
