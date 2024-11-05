<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Visidanmisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class VisidanmisiController extends Controller
{
    // public function general()
    // {
    //     $visimisis = Visidanmisi::all();

    //     return view('general', compact('visimisis'));
    // }

    protected $allowedPerPage = [5, 10, 25, 50];

    public function index(Request $request): View
    {
        $sortField = $request->query('sort_by', 'visi');
        $sortDirection = $request->query('direction', 'asc');
        $perPage = (int) $request->query('per_page', 5);
        $query = $request->input('query'); // Ambil input pencarian dari request

        if (!in_array($perPage, $this->allowedPerPage)) {
            $perPage = 5;
        }

        // DB = nama table
        $items = DB::table('visidanmisis')
            ->where('visi', 'like', '%' . $query . '%')
            ->orWhere('misi', 'like', '%' . $query . '%')
            ->orderBy($sortField, $sortDirection) // asc, desc
            ->paginate($perPage) // Pagination
            ->appends(['query' => $query]);

        return view('admin.visimisi.index', [
            'items' => $items,
            'query' => $query,
            'sortField' => $sortField,
            'sortDirection' => $sortDirection,
            'perPage' => $perPage,
            'allowedPerPage' => $this->allowedPerPage
        ]); // Kirim data ke view
    }

    public function create(): View
    {
        return view('admin.visimisi.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'visi' => 'required|string|max:255',
            'misi' => 'required|string|max:255'
        ]);

        Visidanmisi::create([
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);
        return redirect()->route('admin.visimisi.index')->with('success', 'Dokumen berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Cari data employee berdasarkan ID
        $visimisis = Visidanmisi::findOrFail($id);

        // Kembalikan view edit dengan data employee
        return view('admin.visimisi.edit', compact('visimisis'));
    }

    // Function untuk mengupdate data employee
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'visi' => 'required|string|max:255',
            'misi' => 'required|string|max:255'
        ]);

        // Cari employee berdasarkan ID
        $visimisis = Visidanmisi::findOrFail($id);

        // Update data employee
        $visimisis->update([
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);

        // Redirect ke halaman yang diinginkan setelah update
        return redirect()->route('admin.visimisi.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
    {
        $visimisis = Visidanmisi::findOrFail($id);
        $visimisis->delete();

        return redirect()->route('admin.visimisi.index')->with('success', 'Status deleted successfully!');
    }
}
