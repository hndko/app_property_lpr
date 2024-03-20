<?php

use App\Http\Controllers\Frontend\AgentController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PropertiesController;
use Illuminate\Support\Facades\Route;

/**
 * Route Frontend
 */

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::prefix('properties')->group(function () {
    Route::get('/', [PropertiesController::class, 'index'])->name('properties');
    Route::get('show', [PropertiesController::class, 'show'])->name('properties.show');
});
Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact');
    Route::post('/', [ContactController::class, 'store'])->name('contact.store');
});
Route::get('agent', [AgentController::class, 'index'])->name('agent');
