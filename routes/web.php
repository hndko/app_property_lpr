<?php

use App\Http\Controllers\backend\auth\AuthController as CMSAuthController;
use App\Http\Controllers\backend\cms\DashboardController as CMSDashboardController;
use App\Http\Controllers\backend\cms\UlasanController as CMSUlasanController;
use App\Http\Controllers\backend\cms\KontakMasukController as CMSKontakMasukController;
use App\Http\Controllers\backend\cms\AgentController as CMSAgentController;
use App\Http\Controllers\Frontend\AgentController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PropertiesController;
use Illuminate\Support\Facades\Route;

/*******************************************************/
/* Route Frontend
/*******************************************************/

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

/*******************************************************/
/* Route Backendp
/*******************************************************/

Route::prefix('auth')->group(function () {
    // Route login
    Route::get('login', [CMSAuthController::class, 'index'])->name('auth.login');
    Route::post('login', [CMSAuthController::class, 'authenticate'])->name('auth.authenticate');

    // Route logout
    Route::post('logout', [CMSAuthController::class, 'logout'])->name('auth.logout');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', [CMSDashboardController::class, 'index'])->name('dashboard');
});

Route::prefix('agent')->group(function () {
    Route::get('/', [CMSAgentController::class, 'index'])->name('agent');
    Route::get('create', [CMSAgentController::class, 'create'])->name('agent.create');
    Route::post('store', [CMSAgentController::class, 'store'])->name('agent.store');
    Route::get('edit/{id}', [CMSAgentController::class, 'edit'])->name('agent.edit');
    Route::put('update/{id}', [CMSAgentController::class, 'update'])->name('agent.update');
    Route::delete('destroy/{id}', [CMSAgentController::class, 'destroy'])->name('agent.destroy');
});

Route::prefix('kontak-masuk')->group(function () {
    Route::get('/', [CMSKontakMasukController::class, 'index'])->name('kontak-masuk');
});

Route::prefix('ulasan')->group(function () {
    Route::get('/', [CMSUlasanController::class, 'index'])->name('ulasan');
});
