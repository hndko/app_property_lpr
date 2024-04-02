<?php

use App\Http\Controllers\backend\auth\AuthController as CMSAuthController;
use App\Http\Controllers\backend\cms\DashboardController as CMSDashboardController;
use App\Http\Controllers\backend\cms\UlasanController as CMSUlasanController;
use App\Http\Controllers\backend\cms\KontakMasukController as CMSKontakMasukController;
use App\Http\Controllers\backend\cms\AgentController as CMSAgentController;
use App\Http\Controllers\backend\cms\KotaController as CMSKotaController;
use App\Http\Controllers\backend\cms\PropertyController as CMSPropertyController;
use App\Http\Controllers\backend\cms\SliderPropertyController as CMSSliderPropertyController;
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
    Route::get('show/{slug}', [PropertiesController::class, 'show'])->name('properties.show');
});

Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact');
    Route::post('/', [ContactController::class, 'store'])->name('contact.store');
});

Route::get('agent-properti', [AgentController::class, 'index'])->name('agent-properti');

/*******************************************************/
/* Route Backend
/*******************************************************/

Route::prefix('auth')->group(function () {
    // Route login
    Route::get('login', [CMSAuthController::class, 'index'])->name('auth.login');
    Route::post('login', [CMSAuthController::class, 'authenticate'])->name('auth.authenticate');

    // Route logout
    Route::post('logout', [CMSAuthController::class, 'logout'])->name('auth.logout');
});

Route::prefix('cms')->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [CMSDashboardController::class, 'index'])->name('dashboard');
    });

    Route::prefix('kota')->group(function () {
        Route::get('/', [CMSKotaController::class, 'index'])->name('kota');
        Route::get('create', [CMSKotaController::class, 'create'])->name('kota.create');
        Route::post('store', [CMSKotaController::class, 'store'])->name('kota.store');
        Route::get('edit/{id}', [CMSKotaController::class, 'edit'])->name('kota.edit');
        Route::put('update/{id}', [CMSKotaController::class, 'update'])->name('kota.update');
        Route::delete('destroy/{id}', [CMSKotaController::class, 'destroy'])->name('kota.destroy');
    });

    Route::prefix('agent')->group(function () {
        Route::get('/', [CMSAgentController::class, 'index'])->name('agent');
        Route::get('create', [CMSAgentController::class, 'create'])->name('agent.create');
        Route::post('store', [CMSAgentController::class, 'store'])->name('agent.store');
        Route::get('edit/{id}', [CMSAgentController::class, 'edit'])->name('agent.edit');
        Route::put('update/{id}', [CMSAgentController::class, 'update'])->name('agent.update');
        Route::delete('destroy/{id}', [CMSAgentController::class, 'destroy'])->name('agent.destroy');
    });

    Route::prefix('agent')->group(function () {
        Route::get('/', [CMSAgentController::class, 'index'])->name('agent');
        Route::get('create', [CMSAgentController::class, 'create'])->name('agent.create');
        Route::post('store', [CMSAgentController::class, 'store'])->name('agent.store');
        Route::get('edit/{id}', [CMSAgentController::class, 'edit'])->name('agent.edit');
        Route::put('update/{id}', [CMSAgentController::class, 'update'])->name('agent.update');
        Route::delete('destroy/{id}', [CMSAgentController::class, 'destroy'])->name('agent.destroy');
    });

    Route::prefix('property')->group(function () {
        Route::get('/', [CMSPropertyController::class, 'index'])->name('property');
        Route::get('create', [CMSPropertyController::class, 'create'])->name('property.create');
        Route::post('store', [CMSPropertyController::class, 'store'])->name('property.store');
        Route::get('edit/{id}', [CMSPropertyController::class, 'edit'])->name('property.edit');
        Route::put('update/{id}', [CMSPropertyController::class, 'update'])->name('property.update');
        Route::delete('destroy/{id}', [CMSPropertyController::class, 'destroy'])->name('property.destroy');

        Route::prefix('slider')->group(function () {
            Route::get('/{id}', [CMSSliderPropertyController::class, 'index'])->name('slider');
            Route::get('create/{id}', [CMSSliderPropertyController::class, 'create'])->name('slider.create'); // Menambahkan parameter ID
            Route::post('store/{id}', [CMSSliderPropertyController::class, 'store'])->name('slider.store'); // Menambahkan parameter ID
            Route::get('edit/{id}', [CMSSliderPropertyController::class, 'edit'])->name('slider.edit');
            Route::put('update/{id}', [CMSSliderPropertyController::class, 'update'])->name('slider.update');
            Route::delete('destroy/{id}', [CMSSliderPropertyController::class, 'destroy'])->name('slider.destroy');
        });
    });

    Route::prefix('kontak-masuk')->group(function () {
        Route::get('/', [CMSKontakMasukController::class, 'index'])->name('kontak-masuk');
    });

    Route::prefix('ulasan')->group(function () {
        Route::get('/', [CMSUlasanController::class, 'index'])->name('ulasan');
    });
});
