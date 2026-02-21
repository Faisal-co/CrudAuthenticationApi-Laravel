<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\StudentController;

Route::apiResource('students', StudentController::class);







// This is for Api Authentication using Sanctum
/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); */
