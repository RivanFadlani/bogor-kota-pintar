<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    public function index(): View
    {
        $penilaianAdm = Penilaian::latest()->paginate(5); // 10 items per page

        return view('admin.penilaian.index', compact('penilaianAdm'));
        //
    }

    public function create(): View
    {
        return view('admin.penilaian.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul' => 'required|string|max:50',
            'nilai' => 'required|string|max:50'
        ]);

        Penilaian::create([
            'judul' => $request->judul,
            'nilai' => $request->nilai,
        ]);
        return redirect()->route('admin.penilaian.index')->with('success', 'Dokumen berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Cari data employee berdasarkan ID
        $penilaians = Penilaian::findOrFail($id);

        // Kembalikan view edit dengan data employee
        return view('admin.penilaian.edit', compact('penilaians'));
    }

    // Function untuk mengupdate data employee
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:50',
            'nilai' => 'required|string|max:50'
        ]);

        // Cari employee berdasarkan ID
        $penilaians = Penilaian::findOrFail($id);

        // Update data employee
        $penilaians->update([
            'judul' => $request->judul,
            'nilai' => $request->nilai,
        ]);

        // Redirect ke halaman yang diinginkan setelah update
        return redirect()->route('admin.penilaian.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
    {
        $penilaians = Penilaian::findOrFail($id);
        $penilaians->delete();

        return redirect()->route('admin.penilaian.index')->with('success', 'Status deleted successfully!');
    }
}
