<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstitutionController;

Route::get('/institutions', [InstitutionController::class, 'index']);
