<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class PenilaianController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:view penilaians', only: ['index']),
            new Middleware('permission:edit penilaians', only: ['edit']),
            new Middleware('permission:create penilaians', only: ['create']),
            new Middleware('permission:delete penilaians', only: ['destroy']),
        ];
    }

    protected $allowedPerPage = [5, 10, 25, 50];

    public function index(Request $request): View
    {
        $sortField = $request->query('sort_by', 'judul');
        $sortDirection = $request->query('direction', 'asc');
        $perPage = (int) $request->query('per_page', 5);
        $query = $request->input('query'); // Ambil input pencarian dari request

        if (!in_array($perPage, $this->allowedPerPage)) {
            $perPage = 5;
        }

        // DB = nama table
        $items = DB::table('penilaians')
            ->where('judul', 'like', '%' . $query . '%')
            ->orWhere('nilai', 'like', '%' . $query . '%')
            ->orderBy($sortField, $sortDirection) // asc, desc
            ->paginate($perPage) // Pagination
            ->appends(['query' => $query]);

        return view('admin.penilaian.index', [
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
