<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//siswas
Route::apiResource('/siswas', App\Http\Controllers\Api\siswaController::class);