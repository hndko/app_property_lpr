<?php

namespace App\Http\Controllers\Frontend;

use view;
use App\Models\Agent;
use App\Models\Ulasan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Ladang Padi Resor',
            'pages' => 'Home',
            'ulasan' => Ulasan::latest()->limit(20)->get(),
            'agentCount' => Agent::all()->count()
        ];

        return view('frontend.home', $data);
    }
}
