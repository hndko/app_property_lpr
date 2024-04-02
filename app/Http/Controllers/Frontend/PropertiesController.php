<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertiesController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Ladang Padi Resor',
            'pages' => 'Properties',
            'properties' => Property::latest()->limit(15)->get(),
            'propertiesAll' => Property::paginate(6)
        ];

        return view('frontend.properties.index', $data);
    }

    public function show($slug)
    {
        $property = Property::where('slug', $slug)->firstOrFail();

        $data = [
            'title' => 'Ladang Padi Resor',
            'pages' => 'Properties',
            'res' => $property,
            'sliders' => $property->sliders
        ];

        return view('frontend.properties.show', $data);
    }
}
