<?php

use App\Http\Controllers\FiturController;
use App\Http\Controllers\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('project', ProjectController::class);
Route::resource('fitur', FiturController::class);
