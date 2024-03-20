<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Ladang Padi Resor',
            'pages' => 'Properties'
        ];

        return view('frontend.properties.index', $data);
    }

    public function show()
    {
        $data = [
            'title' => 'Ladang Padi Resor',
            'pages' => 'Properties'
        ];

        return view('frontend.properties.show', $data);
    }
}
