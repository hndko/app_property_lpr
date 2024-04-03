<?php

namespace App\Http\Controllers\backend\cms;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Account',
            'master' => null,
            'pages' => 'Account',
        ];

        return view('backend.cms.account.index', $data);
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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|string|max:30', // Tidak wajib diisi, maksimal 30 karakter
            'new_password' => 'nullable|string|max:30', // Tidak wajib diisi, maksimal 30 karakter
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;

        // Update password jika new_password diisi
        if ($request->filled('new_password')) {
            $request->validate([
                'password' => 'required|string|max:30',
            ]);

            // Validasi bahwa password baru dan konfirmasi password cocok
            if ($request->password !== $request->new_password) {
                return redirect()->back()->with('error', 'Password baru dan konfirmasi password tidak cocok.');
            }

            $user->password = Hash::make($request->new_password);
        }

        $user->save();

        return redirect()->back()->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
