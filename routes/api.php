<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\AgreementController;
use App\Http\Controllers\SimulationController;

Route::get('/institutions', [InstitutionController::class, 'index']);
Route::get('/agreements', [AgreementController::class, 'index']);
Route::post('/simulation', [SimulationController::class, 'index']);