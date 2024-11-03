<?php

namespace App\Http\Controllers;

use App\Models\Sertifikat;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    public function index(Request $request)
    {
        $sertifikatAdm = Sertifikat::latest()->paginate(5); // 10 items per page
        return view('admin.sertifikat.index', compact('sertifikatAdm'));
    }

    public function create(): View
    {
        return view('admin.sertifikat.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'kategori' => 'nullable|string|max:255',
        ]);

        //upload foto KE file /uploads DI /storage
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $ext = $file->getClientOriginalExtension();
            $newName =  date('dmY') . Str::random(10) . '.' . $ext;
            $file->move('uploads/sertifikat', $newName);
            $filename = $newName;
        }

        Sertifikat::create([
            'judul' => $request->judul,
            'gambar' => $filename ?? '',
            'kategori' => $request->kategori,
        ]);
        return redirect()->route('admin.sertifikat.index')->with('success', 'Dokumen berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Cari data employee berdasarkan ID
        $sertifikats = Sertifikat::findOrFail($id);

        // Kembalikan view edit dengan data employee
        return view('admin.sertifikat.edit', compact('sertifikats'));
    }

    // Function untuk mengupdate data employee
    public function update(Request $request, $id): RedirectResponse
    {
        // Validasi input (jadikan gambar opsional saat update)
        $request->validate([
            'judul' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'kategori' => 'nullable|string|max:255',
        ]);

        // Cari quickwin berdasarkan ID
        $sertifikats = Sertifikat::findOrFail($id);

        // Cek apakah ada file gambar baru yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($sertifikats->gambar && file_exists(public_path('uploads/sertifikat/' . $sertifikats->gambar))) {
                unlink(public_path('uploads/sertifikat/' . $sertifikats->gambar));
            }

            // Simpan gambar baru
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/sertifikat/'), $filename);

            // Update nama file gambar pada model
            $sertifikats->gambar = $filename;
        }

        // Update data quickwin lainnya
        $sertifikats->judul = $request->judul;
        $sertifikats->kategori = $request->kategori;
        $sertifikats->save();

        // Redirect ke halaman yang diinginkan setelah update
        return redirect()->route('admin.sertifikat.index')->with('success', 'Dokumen berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $sertifikats = Sertifikat::findOrFail($id);

        $sertifikats->delete();

        return redirect()->route('admin.sertifikat.index')->with('success', 'Status deleted successfully!');
    }
}
