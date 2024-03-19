<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

/**
 * Route Frontend
 */

Route::get('/', [HomeController::class, 'index']);
