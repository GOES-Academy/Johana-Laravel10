<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\SaludoController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('departamento')->group(function () {
    Route::get('/index', [DepartamentoController::class, 'index']); 
    Route::get('/show/{id}', [DepartamentoController::class, 'show']); 
});

Route::prefix('saludo')->group(function () {
    Route::post('/saludar', [SaludoController::class, 'saludar']); 
    
});
