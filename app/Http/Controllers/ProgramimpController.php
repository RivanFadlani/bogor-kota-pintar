<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Programimp;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ProgramimpController extends Controller
{
    public function index(): View
    {
        $programAdm = Programimp::latest()->paginate(5);

        return view('admin.programimp.index', compact('programAdm'));
        //
    }

    public function create(): View
    {
        return view('admin.programimp.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul' => 'required|string|max:50',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        //upload foto KE file /uploads DI /storage
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $ext = $file->getClientOriginalExtension();
            $newName =  date('dmY') . Str::random(10) . '.' . $ext;
            $file->move('uploads/ProgramImplementasi', $newName);
            $filename = $newName;
        }

        Programimp::create([
            'judul' => $request->judul,
            'gambar' => $filename ?? '',
        ]);
        return redirect()->route('admin.programimp.index')->with('success', 'Dokumen berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Cari data employee berdasarkan ID
        $programimps = Programimp::findOrFail($id);

        // Kembalikan view edit dengan data employee
        return view('admin.programimp.edit', compact('programimps'));
    }

    // Function untuk mengupdate data employee
    public function update(Request $request, $id): RedirectResponse
    {
        // Validasi input (jadikan gambar opsional saat update)
        $request->validate([
            'judul' => 'required|string|max:50',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Cari quickwin berdasarkan ID
        $programimps = Programimp::findOrFail($id);

        // Cek apakah ada file gambar baru yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($programimps->gambar && file_exists(public_path('uploads/ProgramImplementasi/' . $programimps->gambar))) {
                unlink(public_path('uploads/ProgramImplementasi/' . $programimps->gambar));
            }

            // Simpan gambar baru
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/ProgramImplementasi/'), $filename);

            // Update nama file gambar pada model
            $programimps->gambar = $filename;
        }

        // Update data quickwin lainnya
        $programimps->judul = $request->judul;
        $programimps->save();

        // Redirect ke halaman yang diinginkan setelah update
        return redirect()->route('admin.programimp.index')->with('success', 'Dokumen berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $programimps = Programimp::findOrFail($id);
        $programimps->delete();

        return redirect()->route('admin.programimp.index')->with('success', 'Status deleted successfully!');
    }
}
