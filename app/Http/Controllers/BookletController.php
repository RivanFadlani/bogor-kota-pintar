<?php

namespace App\Http\Controllers;

use App\Models\Booklet;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;

class BookletController extends Controller
{
    public function index(Request $request)
    {
        $booklets = Booklet::orderBy('created_at', 'desc')->get();
        $bookletAdm = Booklet::latest()->paginate(5); // 10 items per page
        return view('admin.booklet.index', compact('booklets', 'bookletAdm'));
    }

    public function create(): View
    {
        $booklets = Booklet::all();

        return view('admin.booklet.create', compact('booklets'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'judul' => 'required|string|max:50',
            'url' => 'required|url',
        ]);

        //upload foto KE file /uploads DI /storage
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $ext = $file->getClientOriginalExtension();
            $newName =  date('dmY') . Str::random(10) . '.' . $ext;
            $file->move('uploads/booklet', $newName);
            $filename = $newName;
        }

        Booklet::create([
            'gambar' => $filename ?? '',
            'judul' => $request->judul,
            'url' => $request->url,
        ]);
        return redirect()->route('admin.booklet.index')->with('success', 'Dokumen berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Cari data employee berdasarkan ID
        $booklets = Booklet::findOrFail($id);

        // Kembalikan view edit dengan data employee
        return view('admin.booklet.edit', compact('booklets'));
    }

    // Function untuk mengupdate data employee
    public function update(Request $request, $id): RedirectResponse
    {
        // Validasi input (jadikan gambar opsional saat update)
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'judul' => 'required|string|max:50',
            'url' => 'required|url',
        ]);

        // Cari quickwin berdasarkan ID
        $booklets = Booklet::findOrFail($id);

        // Cek apakah ada file gambar baru yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($booklets->gambar && file_exists(public_path('uploads/booklet/' . $booklets->gambar))) {
                unlink(public_path('uploads/booklet/' . $booklets->gambar));
            }

            // Simpan gambar baru
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/booklet/'), $filename);

            // Update nama file gambar pada model
            $booklets->gambar = $filename;
        }

        // Update data quickwin lainnya
        $booklets->judul = $request->judul;
        $booklets->url = $request->url;
        $booklets->save();

        // Redirect ke halaman yang diinginkan setelah update
        return redirect()->route('admin.booklet.index')->with('success', 'Dokumen berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $booklets = Booklet::findOrFail($id);

        $booklets->delete();

        return redirect()->route('admin.booklet.index')->with('success', 'Status deleted successfully!');
    }
}
