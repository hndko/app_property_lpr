<?php

namespace App\Http\Controllers;

use App\Models\Whatsapp;
use App\Models\PengaturanUmum;
use Illuminate\Support\Facades\View;

abstract class Controller
{
    public function __construct()
    {
        // Membagikan data ke semua view
        View::share('whatsapp', Whatsapp::first());
        View::share('setting', PengaturanUmum::first());
    }
}
