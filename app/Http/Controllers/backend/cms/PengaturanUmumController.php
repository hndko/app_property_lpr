<?php

namespace App\Http\Controllers\backend\cms;

use App\Http\Controllers\Controller;
use App\Models\PengaturanUmum;
use Illuminate\Http\Request;

class PengaturanUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Pengaturan Umum',
            'master' => 'Pengaturan Website',
            'pages' => 'Pengaturan Umum',
            'res' => PengaturanUmum::first()
        ];

        return view('backend.cms.pengaturan_umum.index', $data);
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
    public function show(PengaturanUmum $pengaturanUmum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PengaturanUmum $pengaturanUmum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        // Validasi input
        $request->validate([
            'nama_website' => 'required|string|max:155',
            'alamat' => 'required',
            'no_telpon' => 'required|string|max:20',
            'email' => 'required|string|max:155',
            'day_start' => 'required|string|max:55',
            'day_end' => 'required|string|max:55',
            'hours_start' => 'required|string|max:55',
            'hours_end' => 'required|string|max:55',
            'instagram' => 'nullable|string|max:55',
            'twitter' => 'nullable|string|max:55',
            'facebook' => 'nullable|string|max:55',
            'linkedin' => 'nullable|string|max:55',
        ]);

        // Temukan data pengaturanUmum berdasarkan ID
        $pengaturanUmum = PengaturanUmum::findOrFail($id);

        // Update data pengaturanUmum
        $pengaturanUmum->update([
            'nama_website' => $request->nama_website,
            'alamat' => $request->alamat,
            'no_telpon' => $request->no_telpon,
            'email' => $request->email,
            'day_start' => $request->day_start,
            'day_end' => $request->day_end,
            'hours_start' => $request->hours_start,
            'hours_end' => $request->hours_end,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
        ]);

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data Whatsapp berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PengaturanUmum $pengaturanUmum)
    {
        //
    }
}
