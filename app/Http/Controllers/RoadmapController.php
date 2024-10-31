<?php

namespace App\Http\Controllers;

use App\Models\Roadmap;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RoadmapController extends Controller
{
    public function index()
    {
        $roadmaps = Roadmap::orderBy('created_at', 'desc')->get();

        return view('admin.roadmap.index', compact('roadmaps'));
    }


    public function create(): View
    {
        $roadmaps = Roadmap::all();

        return view('admin.roadmap.create', compact('roadmaps'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        //upload foto KE file /uploads DI /storage
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $ext = $file->getClientOriginalExtension();
            $newName =  date('dmY') . Str::random(10) . '.' . $ext;
            $file->move('uploads/roadmap', $newName);
            $filename = $newName;
        }

        Roadmap::create([
            'judul' => $request->judul,
            'gambar' => $filename ?? '',
        ]);
        return redirect()->route('admin.roadmap.index')->with('success', 'Dokumen berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Cari data employee berdasarkan ID
        $roadmaps = Roadmap::findOrFail($id);

        // Kembalikan view edit dengan data employee
        return view('admin.roadmap.edit', compact('roadmaps'));
    }

    // Function untuk mengupdate data employee
    public function update(Request $request, $id): RedirectResponse
    {
        // Validasi input (jadikan gambar opsional saat update)
        $request->validate([
            'judul' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Cari quickwin berdasarkan ID
        $roadmaps = Roadmap::findOrFail($id);

        // Cek apakah ada file gambar baru yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($roadmaps->gambar && file_exists(public_path('uploads/roadmap/' . $roadmaps->gambar))) {
                unlink(public_path('uploads/roadmap/' . $roadmaps->gambar));
            }

            // Simpan gambar baru
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/roadmap/'), $filename);

            // Update nama file gambar pada model
            $roadmaps->gambar = $filename;
        }

        // Update data quickwin lainnya
        $roadmaps->judul = $request->judul;
        $roadmaps->save();

        // Redirect ke halaman yang diinginkan setelah update
        return redirect()->route('admin.roadmap.index')->with('success', 'Dokumen berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $roadmaps = Roadmap::findOrFail($id);

        $roadmaps->delete();

        return redirect()->route('admin.roadmap.index')->with('success', 'Status deleted successfully!');
    }
}
