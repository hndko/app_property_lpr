<?php

namespace App\Providers;

use App\Models\PengaturanUmum;
use App\Models\Whatsapp;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('rupiahIndo', function ($expression) {
            return "Rp. <?= number_format($expression,0,',','.'); ?>";
        });
    }
}
