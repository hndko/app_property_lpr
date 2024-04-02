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

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $data = [
            'title' => 'Ladang Padi Resor',
            'pages' => 'Properties',
            'properties' => Property::whereHas('kota', function ($query) use ($keyword) {
                $query->where('nama_kota', 'like', "%$keyword%");
            })->paginate(6),
            'keyword' => $keyword
        ];

        return view('frontend.properties.search', $data);
    }
}
