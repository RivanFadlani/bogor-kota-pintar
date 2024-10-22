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
        $quickwins = Quickwin::all();

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
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048', // Gambar jadi nullable
            'judul' => 'required|min:5',
            'deskripsi' => 'required|min:10'
        ]);

        // upload image
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/products', $gambar->hashName());

        // Simpan data ke database
        Quickwin::create([
            'gambar' => $gambar->hashName(),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.quickwin.index')->with(['success' => 'Data Berhasil Disimpan']);
    }
}
