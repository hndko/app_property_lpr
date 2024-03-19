<?php

namespace App\Http\Controllers\Frontend;

use view;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => ''
        ];

        return view('frontend.home', $data);
    }
}
