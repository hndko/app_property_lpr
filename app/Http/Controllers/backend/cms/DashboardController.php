<?php

namespace App\Http\Controllers\backend\cms;

use App\Models\Agent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Property;
use App\Models\Ulasan;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'master' => null,
            'pages' => 'Dashboard',
            'agentCount' => Agent::all()->count(),
            'propertyCount' => Property::all()->count(),
            'contactCount' => Contact::all()->count(),
            'ulasanCount' => Ulasan::all()->count(),
        ];

        return view('backend.cms.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
