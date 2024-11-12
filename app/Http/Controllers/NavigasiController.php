<?php

namespace App\Http\Controllers;

use App\Models\Navigasi;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class NavigasiController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:view navigasis', only: ['index']),
            new Middleware('permission:edit navigasis', only: ['edit']),
            new Middleware('permission:create navigasis', only: ['create']),
            new Middleware('permission:delete navigasis', only: ['destroy']),
        ];
    }

    protected $allowedPerPage = [5, 10, 25, 50];

    public function index(Request $request)
    {
        $sortField = $request->query('sort_by', 'nav');
        $sortDirection = $request->query('direction', 'asc');
        $perPage = (int) $request->query('per_page', 5);
        $query = $request->input('query'); // Ambil input pencarian dari request

        if (!in_array($perPage, $this->allowedPerPage)) {
            $perPage = 5;
        }

        // DB = nama table
        $items = DB::table('navigasis')
            ->where('nav', 'like', '%' . $query . '%')
            ->orWhere('url', 'like', '%' . $query . '%')
            ->orderBy($sortField, $sortDirection) // asc, desc
            ->paginate($perPage) // Pagination
            ->appends(['query' => $query]);

        return view('admin.navigasi.index', [
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
        $navigasis = Navigasi::all();

        return view('admin.navigasi.create', compact('navigasis'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nav' => 'required|string|max:50',
            'url' => 'required|url',
        ]);

        Navigasi::create([
            'nav' => $request->nav,
            'url' => $request->url,
        ]);
        return redirect()->route('admin.navigasi.index')->with('success', 'Dokumen berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Cari data employee berdasarkan ID
        $navigasis = Navigasi::findOrFail($id);

        // Kembalikan view edit dengan data employee
        return view('admin.navigasi.edit', compact('navigasis'));
    }

    // Function untuk mengupdate data employee
    public function update(Request $request, $id): RedirectResponse
    {
        // Validasi input (jadikan gambar opsional saat update)
        $request->validate([
            'nav' => 'required|string|max:50',
            'url' => 'required|url',
        ]);

        // Cari quickwin berdasarkan ID
        $navigasis = Navigasi::findOrFail($id);

        // Update data quickwin lainnya
        $navigasis->nav = $request->nav;
        $navigasis->url = $request->url;
        $navigasis->save();

        // Redirect ke halaman yang diinginkan setelah update
        return redirect()->route('admin.navigasi.index')->with('success', 'Dokumen berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $navigasis = Navigasi::findOrFail($id);

        $navigasis->delete();

        return redirect()->route('admin.navigasi.index')->with('success', 'Status deleted successfully!');
    }
}
