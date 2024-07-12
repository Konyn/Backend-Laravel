<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContractingController;
use App\Http\Controllers\DownloadsController;
use App\Http\Controllers\MusiciansController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserTrafficController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user-traffic', [UserTrafficController::class, 'index']);
    Route::get('/transactions', [TransactionController::class, 'index']);
    Route::get('/downloads', [DownloadsController::class, 'index']);
    Route::get('/musicians', [MusiciansController::class, 'index']);
    Route::get('/contracting', [ContractingController::class, 'index']);
    Route::post('/logout', [AuthController::class, 'logout']);
});