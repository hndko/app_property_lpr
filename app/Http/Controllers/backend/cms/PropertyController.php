<?php

namespace App\Http\Controllers\backend\cms;

use App\Models\Kota;
use App\Models\Agent;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Property',
            'master' => null,
            'pages' => 'Property',
            'result' => Property::latest()->get()
        ];

        return view('backend.cms.property.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Property',
            'master' => null,
            'pages' => 'Property',
            'agent' => Agent::latest()->get(),
            'kota' => Kota::latest()->get()
        ];

        return view('backend.cms.property.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required|string|unique:tb_property,slug',
            'foto_sampul' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi foto sampul
            'property_name' => 'required|string|max:155',
            'harga' => 'required|max:20',
            'sertifikat' => 'required|string|max:55',
            'kondisi' => 'required|string|max:55',
            'luas_tanah' => 'required|max:20',
            'luas_bangunan' => 'required|max:20',
            'alamat' => 'required',
            'kelengkapan' => 'required|string|max:55',
            'jumlah_lantai' => 'required|max:20',
            'kamar_tidur' => 'required|max:20',
            'kamar_mandi' => 'required|max:20',
            'watt_listrik' => 'required|max:20',
            'deskripsi' => 'required',
            'is_status' => 'required',
        ]);

        // Simpan foto_sampul ke storage/public/images/foto_property dengan nama unik
        $images = $request->file('foto_sampul');
        $images->storeAs('public/images/foto_property', $images->hashName());

        // Simpan nama file saja ke dalam database
        $property = new Property();
        $property->slug = $request->slug;
        $property->foto_sampul = $images->hashName();
        $property->property_name = $request->property_name;
        $property->agent_id = $request->agent_id;
        $property->kota_id = $request->kota_id;
        $property->harga = $request->harga;
        $property->sertifikat = $request->sertifikat;
        $property->kondisi = $request->kondisi;
        $property->luas_tanah = $request->luas_tanah;
        $property->luas_bangunan = $request->luas_bangunan;
        $property->alamat = $request->alamat;
        $property->kelengkapan = $request->kelengkapan;
        $property->jumlah_lantai = $request->jumlah_lantai;
        $property->kamar_tidur = $request->kamar_tidur;
        $property->kamar_mandi = $request->kamar_mandi;
        $property->watt_listrik = $request->watt_listrik;
        $property->deskripsi = $request->deskripsi;
        $property->is_status = $request->is_status;
        $property->save();

        return redirect()->route('property')->with('success', 'Data property berhasil ditambahkan.');
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
        $data = [
            'title' => 'Property',
            'master' => null,
            'pages' => 'Property',
            'agent' => Agent::latest()->get(),
            'kota' => Kota::latest()->get(),
            'res' => Property::findOrFail($id)
        ];

        return view('backend.cms.property.edit', $data);
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
