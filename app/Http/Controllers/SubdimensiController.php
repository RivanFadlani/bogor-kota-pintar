<?php

namespace App\Http\Controllers;

use App\Models\Subdimensi;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SubdimensiController extends Controller
{
    public function index()
    {
        $subdimensis = Subdimensi::orderBy('created_at', 'desc')->get();
        $subdimensiAdm = Subdimensi::latest()->paginate(5); // 10 items per page

        return view('admin.subdimensi.index', compact('subdimensis', 'subdimensiAdm'));
    }


    public function create(): View
    {
        $subdimensis = Subdimensi::all();

        return view('admin.subdimensi.create', compact('subdimensis'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'dimensi' => 'required|string|max:50',
            'sub' => 'required|string|max:50',
            'deskripsi' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:1024'
        ]);

        //upload foto KE file /uploads DI /storage
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $ext = $file->getClientOriginalExtension();
            $newName =  date('dmY') . Str::random(10) . '.' . $ext;
            $file->move('uploads/subdimensi', $newName);
            $filename = $newName;
        }

        Subdimensi::create([
            'dimensi' => $request->dimensi,
            'sub' => $request->sub,
            'deskripsi' => $request->deskripsi,
            'gambar' => $filename ?? '',
        ]);
        return redirect()->route('admin.subdimensi.index')->with('success', 'Dokumen berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Cari data employee berdasarkan ID
        $subdimensis = Subdimensi::findOrFail($id);

        // Kembalikan view edit dengan data employee
        return view('admin.subdimensi.edit', compact('subdimensis'));
    }

    // Function untuk mengupdate data employee
    public function update(Request $request, $id): RedirectResponse
    {
        // Validasi input (jadikan gambar opsional saat update)
        $request->validate([
            'dimensi' => 'required|string|max:50',
            'sub' => 'required|string|max:50',
            'deskripsi' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:1024'
        ]);

        // Cari quickwin berdasarkan ID
        $subdimensis = Subdimensi::findOrFail($id);

        // Cek apakah ada file gambar baru yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($subdimensis->gambar && file_exists(public_path('uploads/subdimensi/' . $subdimensis->gambar))) {
                unlink(public_path('uploads/subdimensi/' . $subdimensis->gambar));
            }

            // Simpan gambar baru
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/subdimensi/'), $filename);

            // Update nama file gambar pada model
            $subdimensis->gambar = $filename;
        }

        // Update data quickwin lainnya
        $subdimensis->dimensi = $request->dimensi;
        $subdimensis->sub = $request->sub;
        $subdimensis->deskripsi = $request->deskripsi;
        $subdimensis->save();

        // Redirect ke halaman yang diinginkan setelah update
        return redirect()->route('admin.subdimensi.index')->with('success', 'Dokumen berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $subdimensis = Subdimensi::findOrFail($id);

        $subdimensis->delete();

        return redirect()->route('admin.subdimensi.index')->with('success', 'Status deleted successfully!');
    }
}
