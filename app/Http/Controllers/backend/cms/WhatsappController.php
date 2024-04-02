<?php

namespace App\Http\Controllers\backend\cms;

use App\Http\Controllers\Controller;
use App\Models\Whatsapp;
use Illuminate\Http\Request;

class WhatsappController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Whatsapp',
            'master' => 'Pengaturan Website',
            'pages' => 'Whatsapp',
            'res' => Whatsapp::first()
        ];

        return view('backend.cms.whatsapp.index', $data);
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
    public function show(Whatsapp $whatsapp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Whatsapp $whatsapp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'no_telpon' => 'required|string|max:20',
            'text_whatsapp' => 'required|string',
        ]);

        // Temukan data Whatsapp berdasarkan ID
        $whatsapp = Whatsapp::findOrFail($id);

        // Update data Whatsapp
        $whatsapp->update([
            'no_telpon' => $request->no_telpon,
            'text_whatsapp' => $request->text_whatsapp,
        ]);

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data Whatsapp berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Whatsapp $whatsapp)
    {
        //
    }
}
