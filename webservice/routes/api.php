<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComputerController;

// API Routes
Route::post('login', [AuthController::class, 'login']); // เส้นทางสำหรับการเข้าสู่ระบบ

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('computers', [ComputerController::class, 'index']);
    Route::post('computers', [ComputerController::class, 'store']);
    Route::get('computers/{id}', [ComputerController::class, 'show']);
    Route::put('computers/{id}', [ComputerController::class, 'update']);
    Route::delete('computers/{id}', [ComputerController::class, 'destroy']);
});


