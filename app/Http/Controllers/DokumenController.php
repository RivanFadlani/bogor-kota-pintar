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

    public function general()
    {
        $dokumens = Dokumen::all();

        return view('general', compact('dokumens'));
    }

    public function index(): View
    {
        $dokumens = Dokumen::latest()->paginate(10);

        return view('admin.dokumen.index', compact('dokumens'));
        //
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
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'judul' => 'required|string|max:50',
            'url' => 'required|url',
            'kategori_id' => 'required|exist:kategoris,id'
        ]);

        // Cari employee berdasarkan ID
        $dokumens = Dokumen::findOrFail($id);

        // Update data employee
        $dokumens->update([
            'gambar' => $filename ?? '',
            'judul' => $request->judul,
            'url' => $request->url,
            'kategori_id' => $request->kategori_id
        ]);

        // Redirect ke halaman yang diinginkan setelah update
        return redirect()->route('admin.dokumen.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
    {
        $dokumens = Dokumen::findOrFail($id);

        $dokumens->delete();

        return redirect()->route('admin.dokumen.index')->with('success', 'Status deleted successfully!');
    }
}
