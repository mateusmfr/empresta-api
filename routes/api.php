<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\AgreementController;

Route::get('/institutions', [InstitutionController::class, 'index']);
Route::get('/agreements', [AgreementController::class, 'index']);