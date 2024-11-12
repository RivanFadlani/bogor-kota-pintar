<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class KategoriController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:view kategori dokumens', only: ['index']),
            new Middleware('permission:edit kategori dokumens', only: ['edit']),
            new Middleware('permission:create kategori dokumens', only: ['create']),
            new Middleware('permission:delete kategori dokumens', only: ['destroy']),
        ];
    }

    protected $allowedPerPage = [5, 10, 25, 50];

    public function index(Request $request): View
    {
        $sortField = $request->query('sort_by', 'kategori');
        $sortDirection = $request->query('direction', 'asc');
        $perPage = (int) $request->query('per_page', 5);
        $query = $request->input('query'); // Ambil input pencarian dari request

        if (!in_array($perPage, $this->allowedPerPage)) {
            $perPage = 5;
        }

        // DB = nama table
        $items = DB::table('kategoris')
            ->where('kategori', 'like', '%' . $query . '%')
            ->orderBy($sortField, $sortDirection) // asc, desc
            ->paginate($perPage) // Pagination
            ->appends(['query' => $query]);

        return view('admin.kategori.index', [
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
        return view('admin.kategori.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'kategori' => 'required|string|max:10',
        ]);

        Kategori::create([
            'kategori' => $request->kategori,
        ]);
        return redirect()->route('admin.kategori.index')->with('success', 'Dokumen berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Cari data employee berdasarkan ID
        $kategoris = Kategori::findOrFail($id);

        // Kembalikan view edit dengan data employee
        return view('admin.kategori.edit', compact('kategoris'));
    }

    // Function untuk mengupdate data employee
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'kategori' => 'required|string|max:50',
        ]);

        // Cari employee berdasarkan ID
        $kategoris = Kategori::findOrFail($id);

        // Update data employee
        $kategoris->update([
            'kategori' => $request->judul,
        ]);

        // Redirect ke halaman yang diinginkan setelah update
        return redirect()->route('admin.kategori.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
    {
        $kategoris = Kategori::findOrFail($id);
        $kategoris->delete();

        return redirect()->route('admin.kategori.index')->with('success', 'Status deleted successfully!');
    }
}
