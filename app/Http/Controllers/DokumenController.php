<?php

namespace App\Http\Controllers;
use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DokumenController extends Controller
{
    // MENAMPILKAN DATA YANG SUDAH ADA DI DATABASE
    public function index()
    {
        $dokumen = Dokumen::all();
        return view('admin.dokumen.view', compact('dokumen'));
    }

    public function create()
    {
        return view('admin.dokumen.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:50',
            'file_foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        //upload foto KE file /uploads DI /storage
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $newName =  date('dmY') . Str::random(10) . '.' . $ext;
            $file->move('uploads/file', $newName);
            $filename = $newName;
        }

        Dokumen::create([
            'judul' => $request->input('judul'),
            'file' => $filename ?? '',
            'kategori_id' => 1,
        ]);
        return redirect()->route('admin.dokumen.index')->with('success', 'Dokumen berhasil ditambahkan!');
    }
}
