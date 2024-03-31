<?php

namespace App\Http\Controllers\backend\cms;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Agent',
            'master' => null,
            'pages' => 'Agent',
            'result' => Agent::latest()->get()
        ];

        return view('backend.cms.agent.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Agent',
            'master' => null,
            'pages' => 'Agent'
        ];

        return view('backend.cms.agent.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto_sampul' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi foto sampul
            'nama_lengkap' => 'required|string|max:155',
            'no_telpon' => 'required|string|max:20',
            'instagram' => 'nullable|string|max:55',
            'twitter' => 'nullable|string|max:55',
            'facebook' => 'nullable|string|max:55',
            'linked_in' => 'nullable|string|max:55',
        ]);

        // Simpan foto_sampul ke storage/public/images/foto_sampul dengan nama unik
        $images = $request->file('foto_sampul');
        $images->storeAs('public/images/foto_sampul', $images->hashName());

        // Simpan nama file saja ke dalam database
        $agent = new Agent();
        $agent->foto_sampul = $images->hashName();
        $agent->nama_lengkap = $request->nama_lengkap;
        $agent->no_telpon = $request->no_telpon;
        $agent->instagram = $request->instagram;
        $agent->twitter = $request->twitter;
        $agent->facebook = $request->facebook;
        $agent->linked_in = $request->linked_in;
        $agent->save();

        return redirect()->route('agent')->with('success', 'Data agent berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $data = [
            'title' => 'Agent',
            'master' => null,
            'pages' => 'Agent',
            'res' => Agent::findOrFail($id)
        ];

        return view('backend.cms.agent.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $request->validate([
            'foto_sampul' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi foto sampul opsional
            'nama_lengkap' => 'required|string|max:155',
            'no_telpon' => 'required|string|max:20',
            'instagram' => 'nullable|string|max:55',
            'twitter' => 'nullable|string|max:55',
            'facebook' => 'nullable|string|max:55',
            'linked_in' => 'nullable|string|max:55',
        ]);

        // Temukan data agen berdasarkan ID
        $agent = Agent::findOrFail($id);

        // Cek apakah terdapat file foto_sampul baru yang diunggah
        if ($request->hasFile('foto_sampul')) {
            // Hapus file foto_sampul lama jika ada
            if (Storage::exists('public/images/foto_sampul/' . $agent->foto_sampul)) {
                Storage::delete('public/images/foto_sampul/' . $agent->foto_sampul);
            }

            // Simpan foto_sampul baru ke storage/public/images/foto_sampul dengan nama unik
            $images = $request->file('foto_sampul');
            $images->storeAs('public/images/foto_sampul', $images->hashName());

            // Simpan nama file baru ke dalam database
            $agent->foto_sampul = $images->hashName();
        }

        // Simpan data agen yang diperbarui ke dalam database
        $agent->nama_lengkap = $request->nama_lengkap;
        $agent->no_telpon = $request->no_telpon;
        $agent->instagram = $request->instagram;
        $agent->twitter = $request->twitter;
        $agent->facebook = $request->facebook;
        $agent->linked_in = $request->linked_in;
        $agent->save();

        return redirect()->route('agent')->with('success', 'Data agent berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        // Temukan data agen berdasarkan ID
        $agent = Agent::findOrFail($id);

        // Hapus file foto_sampul jika ada
        if (Storage::exists('public/images/foto_sampul/' . $agent->foto_sampul)) {
            Storage::delete('public/images/foto_sampul/' . $agent->foto_sampul);
        }

        // Hapus data agen dari database
        $agent->delete();

        return redirect()->route('agent')->with('success', 'Data agent berhasil dihapus.');
    }
}
