<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::orderBy('created_at', 'desc')->get();
        $videoAdm = Video::latest()->paginate(5); // 10 items per page

        return view('admin.video.index', compact('videos', 'videoAdm'));
    }


    public function create(): View
    {
        $videos = Video::all();

        return view('admin.video.create', compact('videos'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul' => 'nullable|string|max:50',
            'youtube_link' => 'required|url',
        ]);

        Video::create([
            'judul' => $request->judul,
            'youtube_link' => $request->youtube_link
        ]);
        return redirect()->route('admin.video.index')->with('success', 'Dokumen berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Cari data employee berdasarkan ID
        $videos = Video::findOrFail($id);

        // Kembalikan view edit dengan data employee
        return view('admin.video.edit', compact('videos'));
    }

    // Function untuk mengupdate data employee
    public function update(Request $request, $id): RedirectResponse
    {
        // Validasi input (jadikan gambar opsional saat update)
        $request->validate([
            'judul' => 'nullable|string|max:50',
            'youtube_link' => 'required|url',
        ]);

        // Cari quickwin berdasarkan ID
        $videos = Video::findOrFail($id);

        // Update data quickwin lainnya
        $videos->judul = $request->judul;
        $videos->youtube_link = $request->youtube_link;
        $videos->save();

        // Redirect ke halaman yang diinginkan setelah update
        return redirect()->route('admin.video.index')->with('success', 'Dokumen berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $videos = Video::findOrFail($id);

        $videos->delete();

        return redirect()->route('admin.video.index')->with('success', 'Status deleted successfully!');
    }
}
