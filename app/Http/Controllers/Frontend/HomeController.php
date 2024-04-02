<?php

namespace App\Http\Controllers\Frontend;

use view;
use App\Models\Agent;
use App\Models\Ulasan;
use App\Models\Property;
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
            'agentCount' => Agent::all()->count(),
            'propertiesCount' => Property::all()->count(),
            'properties' => Property::latest()->limit(15)->get()
        ];

        return view('frontend.home', $data);
    }
}
