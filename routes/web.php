<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);
Route::get('/create', [PageController::class, 'create']);
Route::post('/', [PageController::class, 'store']);
Route::get('/{id}', [PageController::class, 'detail']);
Route::get('/{id}/edit', [PageController::class, 'edit']);
Route::put('/{id}', [PageController::class, 'update']);
Route::delete('/{id}', [PageController::class, 'destroy']);