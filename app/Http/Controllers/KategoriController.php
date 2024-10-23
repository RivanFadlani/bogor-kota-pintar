<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class KategoriController extends Controller
{
    public function index(): View
    {
        $kategoris = Kategori::latest()->paginate(10);

        return view('admin.kategoris.index', compact('kategoris'));
        //
    }

    public function create(): View
    {

        return view('admin.kategori.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'kategori' => 'required|string|max:50',
        ]);

        Kategori::create([
            'kategori' => $request->judul,
        ]);
        return redirect()->route('admin.kategori.index')->with('success', 'Dokumen berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Cari data employee berdasarkan ID
        $kategoris = Kategori::findOrFail($id);

        // Kembalikan view edit dengan data employee
        return view('admin.kategori.edit', compact('kategoris'));
    }

    // Function untuk mengupdate data employee
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'kategori' => 'required|string|max:50',
        ]);

        // Cari employee berdasarkan ID
        $dokumens = Kategori::findOrFail($id);

        // Redirect ke halaman yang diinginkan setelah update
        return redirect()->route('admin.kategori.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
    {
        $kategoris = Kategori::findOrFail($id);
        $kategoris->delete();

        return redirect()->route('admin.dokumen.index')->with('success', 'Status deleted successfully!');
    }
}
