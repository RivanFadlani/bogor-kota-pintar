<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Quickwin;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class QuickwinController extends Controller
{
    public function index(): view
    {
        $quickwins = Quickwin::orderBy('created_at', 'desc')->get();

        return view('admin.quickwin.index', compact('quickwins'));
        //
    }

    public function create(): view
    {
        return view('admin.quickwin.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul' => 'required|string|max:50',
            'deskripsi' => 'required|string|max:50',
            'tahun' => 'required|date|before_or_equal:today'
        ]);

        //upload foto KE file /uploads DI /storage
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $ext = $file->getClientOriginalExtension();
            $newName =  date('dmY') . Str::random(10) . '.' . $ext;
            $file->move('uploads/quickwin', $newName);
            $filename = $newName;
        }

        Quickwin::create([
            'gambar' => $filename ?? '',
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'tahun' => $request->input('tahun')
        ]);
        return redirect()->route('admin.quickwin.index')->with('success', 'Dokumen berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Cari data employee berdasarkan ID
        $quickwins = Quickwin::findOrFail($id);

        // Kembalikan view edit dengan data employee
        return view('admin.quickwin.edit', compact('quickwins'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        // Validasi input (jadikan gambar opsional saat update)
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // jadikan gambar nullable
            'judul' => 'required|string|max:50',
            'deskripsi' => 'required|string|max:50',
            'tahun' => 'required|date|before_or_equal:today'
        ]);

        // Cari quickwin berdasarkan ID
        $quickwins = Quickwin::findOrFail($id);

        // Cek apakah ada file gambar baru yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($quickwins->gambar && file_exists(public_path('uploads/quickwin/' . $quickwins->gambar))) {
                unlink(public_path('uploads/quickwin/' . $quickwins->gambar));
            }

            // Simpan gambar baru
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/quickwin/'), $filename);

            // Update nama file gambar pada model
            $quickwins->gambar = $filename;
        }

        // Update data quickwin lainnya
        $quickwins->judul = $request->judul;
        $quickwins->deskripsi = $request->deskripsi;
        $quickwins->tahun = $request->tahun;
        $quickwins->save();

        // Redirect ke halaman yang diinginkan setelah update
        return redirect()->route('admin.quickwin.index')->with('success', 'Dokumen berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $quickwins = Quickwin::findOrFail($id);
        $quickwins->delete();

        return redirect()->route('admin.quickwin.index')->with('success', 'Status deleted successfully!');
    }
}
