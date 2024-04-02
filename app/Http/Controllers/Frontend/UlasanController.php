<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Ulasan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Ladang Padi Resor',
            'pages' => 'Ulasan'
        ];

        return view('frontend.ulasan', $data);
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
        // Validasi input
        $validator = Validator::make($request->all(), [
            'rating' => 'required',
            'nama_lengkap' => 'required|string|max:155',
            'text_ulasan' => 'required',
            'jabatan' => 'required|string|max:155',
        ]);

        // Jika validasi gagal, kembalikan dengan pesan kesalahan
        if ($validator->fails()) {
            return redirect()->route('tulis-ulasan')
                ->withErrors($validator)
                ->withInput();
        }

        // Simpan data ke database
        Ulasan::create([
            'rating' => $request->input('rating'),
            'nama_lengkap' => $request->input('nama_lengkap'),
            'text_ulasan' => $request->input('text_ulasan'),
            'jabatan' => $request->input('jabatan'),
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('tulis-ulasan')->with('success', 'Terima kasih atas ulasan yang anda berikan!');
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
