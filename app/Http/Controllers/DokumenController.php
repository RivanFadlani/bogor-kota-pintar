<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Kategori;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class DokumenController extends Controller
{
    public function getDataById($id)
    {
        // Ambil data berdasarkan ID yang diklik
        $data = Dokumen::findOrFail($id);

        // Update field "dilihat" dengan menambahkan 1 pada nilai sebelumnya
        $data->dilihat += 1;
        $data->save();

        // Kembalikan data yang telah diperbarui
        return response()->json($data);
    }

    // public function general()
    // {
    //     $dokumens = Dokumen::orderBy('created_at', 'desc')->get();

    //     return view('general', compact('dokumens'));
    // }

    // App\Http\Controllers\Admin\DokumenController.php
    public function index()
    {
        $dokumens = Dokumen::with('kategori')->get(); // Memuat relasi kategori
        $dokumenAdm = Dokumen::latest()->paginate(5); // 10 items per page

        return view('admin.dokumen.index', compact('dokumens', 'dokumenAdm'));
    }


    public function create(): View
    {
        $kategoris = Kategori::all();

        return view('admin.dokumen.create', compact('kategoris'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'judul' => 'required|string|max:50',
            'url' => 'required|url',
            'kategori_id' => 'required'
        ]);

        //upload foto KE file /uploads DI /storage
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $ext = $file->getClientOriginalExtension();
            $newName =  date('dmY') . Str::random(10) . '.' . $ext;
            $file->move('uploads/dokumen', $newName);
            $filename = $newName;
        }

        Dokumen::create([
            'gambar' => $filename ?? '',
            'judul' => $request->judul,
            'url' => $request->url,
            'kategori_id' => $request->kategori_id
        ]);
        return redirect()->route('admin.dokumen.index')->with('success', 'Dokumen berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Cari data employee berdasarkan ID
        $dokumens = Dokumen::findOrFail($id);
        $kategoris = Kategori::all();

        // Kembalikan view edit dengan data employee
        return view('admin.dokumen.edit', compact('dokumens', 'kategoris'));
    }

    // Function untuk mengupdate data employee
    public function update(Request $request, $id): RedirectResponse
    {
        // Validasi input (jadikan gambar opsional saat update)
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'judul' => 'required|string|max:50',
            'url' => 'required|url',
            'kategori_id' => 'required'
        ]);

        // Cari quickwin berdasarkan ID
        $dokumens = Dokumen::findOrFail($id);

        // Cek apakah ada file gambar baru yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($dokumens->gambar && file_exists(public_path('uploads/dokumen/' . $dokumens->gambar))) {
                unlink(public_path('uploads/dokumen/' . $dokumens->gambar));
            }

            // Simpan gambar baru
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/dokumen/'), $filename);

            // Update nama file gambar pada model
            $dokumens->gambar = $filename;
        }

        // Update data quickwin lainnya
        $dokumens->judul = $request->judul;
        $dokumens->url = $request->url;
        $dokumens->kategori_id = $request->kategori_id;
        $dokumens->save();

        // Redirect ke halaman yang diinginkan setelah update
        return redirect()->route('admin.dokumen.index')->with('success', 'Dokumen berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $dokumens = Dokumen::findOrFail($id);

        $dokumens->delete();

        return redirect()->route('admin.dokumen.index')->with('success', 'Status deleted successfully!');
    }
}
