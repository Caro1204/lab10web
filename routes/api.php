<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MathController;
use App\Http\Controllers\TaskController;

// Rutas de MathController
Route::get('/suma/{num1}/{num2}', [MathController::class, 'suma']);
Route::get('/mult/{num1}/{num2}', [MathController::class, 'mult']);

// Ruta para obtener el usuario autenticado
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas para TaskController
Route::get('/tasks', [TaskController::class, 'index']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user/tasks', [TaskController::class, 'getUserTasks']);
    Route::put('/tasks/{id}', [TaskController::class, 'update']);
    Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);
});
