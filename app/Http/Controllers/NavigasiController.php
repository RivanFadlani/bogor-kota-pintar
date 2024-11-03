<?php

namespace App\Http\Controllers;

use App\Models\Navigasi;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class NavigasiController extends Controller
{
    public function index()
    {
        $navigasiAdm = Navigasi::latest()->paginate(5); // 10 items per page

        return view('admin.navigasi.index', compact('navigasiAdm'));
    }


    public function create(): View
    {
        $navigasis = Navigasi::all();

        return view('admin.navigasi.create', compact('navigasis'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nav' => 'required|string|max:50',
            'url' => 'required|url',
        ]);

        Navigasi::create([
            'nav' => $request->nav,
            'url' => $request->url,
        ]);
        return redirect()->route('admin.navigasi.index')->with('success', 'Dokumen berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Cari data employee berdasarkan ID
        $navigasis = Navigasi::findOrFail($id);

        // Kembalikan view edit dengan data employee
        return view('admin.navigasi.edit', compact('navigasis'));
    }

    // Function untuk mengupdate data employee
    public function update(Request $request, $id): RedirectResponse
    {
        // Validasi input (jadikan gambar opsional saat update)
        $request->validate([
            'nav' => 'required|string|max:50',
            'url' => 'required|url',
        ]);

        // Cari quickwin berdasarkan ID
        $navigasis = Navigasi::findOrFail($id);

        // Update data quickwin lainnya
        $navigasis->nav = $request->nav;
        $navigasis->url = $request->url;
        $navigasis->save();

        // Redirect ke halaman yang diinginkan setelah update
        return redirect()->route('admin.navigasi.index')->with('success', 'Dokumen berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $navigasis = Navigasi::findOrFail($id);

        $navigasis->delete();

        return redirect()->route('admin.navigasi.index')->with('success', 'Status deleted successfully!');
    }
}
