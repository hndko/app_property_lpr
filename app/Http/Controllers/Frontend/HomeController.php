<?php

namespace App\Http\Controllers\Frontend;

use view;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ulasan;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Ladang Padi Resor',
            'pages' => 'Home',
            'ulasan' => Ulasan::latest()->limit(20)->get()
        ];

        return view('frontend.home', $data);
    }
}
