<?php

namespace App\Http\Controllers\backend\cms;

use App\Http\Controllers\Controller;
use App\Models\Kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Kota',
            'master' => null,
            'pages' => 'Kota',
            'result' => Kota::latest()->get()
        ];

        return view('backend.cms.kota.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Kota',
            'master' => null,
            'pages' => 'Kota'
        ];

        return view('backend.cms.kota.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kota' => 'required|string|max:155',
        ]);

        // Simpan nama file saja ke dalam database
        $kota = new Kota();
        $kota->nama_kota = $request->nama_kota;
        $kota->save();

        return redirect()->route('kota')->with('success', 'Data kota berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $data = [
            'title' => 'Kota',
            'master' => null,
            'pages' => 'Kota',
            'res' => Kota::findOrFail($id)
        ];

        return view('backend.cms.kota.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $request->validate([
            'nama_kota' => 'required|string|max:155',
        ]);

        // Temukan data agen berdasarkan ID
        $kota = Kota::findOrFail($id);

        // Simpan data agen yang diperbarui ke dalam database
        $kota->nama_kota = $request->nama_kota;
        $kota->save();

        return redirect()->route('kota')->with('success', 'Data kota berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        // Temukan data agen berdasarkan ID
        $kota = Kota::findOrFail($id);

        // Hapus data agen dari database
        $kota->delete();

        return redirect()->route('kota')->with('success', 'Data kota berhasil dihapus.');
    }
}
