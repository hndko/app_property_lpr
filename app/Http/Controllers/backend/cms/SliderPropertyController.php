<?php

namespace App\Http\Controllers\backend\cms;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\SliderProperty;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SliderPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(String $id)
    {
        $data = [
            'title' => 'Slider Property',
            'master' => null,
            'pages' => 'Property',
            'property' => Property::findOrFail($id),
            'result' => SliderProperty::all()
        ];

        return view('backend.cms.property.slider.index', $data);
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
    public function store(Request $request, String $id)
    {
        $request->validate([
            'foto_sampul' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi foto sampul
        ]);

        // Cari property berdasarkan ID
        $property = Property::findOrFail($id);

        // Simpan foto_sampul ke storage/public/images/foto_slider dengan nama unik
        $image = $request->file('foto_sampul');
        $imageName = $image->hashName();
        $image->storeAs('public/images/foto_slider', $imageName);

        // Simpan nama file dan property_id ke dalam tabel tb_slider_property
        SliderProperty::create([
            'property_id' => $property->property_id,
            'foto_slider' => $imageName,
        ]);

        return redirect()->route('slider', ['id' => $id])->with('success', 'Foto slider berhasil ditambahkan untuk property.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SliderProperty $sliderProperty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SliderProperty $sliderProperty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SliderProperty $sliderProperty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan data slider berdasarkan ID
        $slider = SliderProperty::findOrFail($id);

        // Hapus file foto_slider jika ada
        if (Storage::exists('public/images/foto_slider/' . $slider->foto_slider)) {
            Storage::delete('public/images/foto_slider/' . $slider->foto_slider);
        }

        // Hapus data slider dari database
        $slider->delete();

        // Redirect ke halaman slider dengan property_id yang sesuai
        return redirect()->route('slider', ['id' => $slider->property_id])->with('success', 'Data slider berhasil dihapus.');
    }
}
