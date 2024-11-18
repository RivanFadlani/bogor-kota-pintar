<?php

namespace App\Http\Controllers;

use App\Models\Dimensi;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class DimensiController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:view dimensis', only: ['index']),
            new Middleware('permission:edit dimensis', only: ['edit']),
            new Middleware('permission:create dimensis', only: ['create']),
            new Middleware('permission:delete dimensis', only: ['destroy']),
        ];
    }

    protected $allowedPerPage = [5, 10, 25, 50];

    public function index(Request $request)
    {
        $sortField = $request->query('sort_by', 'created_at');
        $sortDirection = $request->query('direction', 'desc');
        $perPage = (int) $request->query('per_page', 5);
        $query = $request->input('query'); // Ambil input pencarian dari request

        if (!in_array($perPage, $this->allowedPerPage)) {
            $perPage = 5;
        }

        // DB = nama table
        $items = DB::table('dimensis')
            ->where('judul', 'like', '%' . $query . '%')
            ->orWhere('deskripsi', 'like', '%' . $query . '%')
            ->orderBy($sortField, $sortDirection) // asc, desc
            ->paginate($perPage) // Pagination
            ->appends(['query' => $query]);

        return view('admin.dimensi.index', [
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
        $dimensis = Dimensi::all();

        return view('admin.dimensi.create', compact('dimensis'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul' => 'required|string|max:50',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'deskripsi' => 'required|string|max:255',
        ]);

        //upload foto KE file /uploads DI /storage
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $ext = $file->getClientOriginalExtension();
            $newName =  date('dmY') . Str::random(10) . '.' . $ext;
            $file->move('uploads/dimensi', $newName);
            $filename = $newName;
        }

        Dimensi::create([
            'judul' => $request->judul,
            'gambar' => $filename ?? '',
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('admin.dimensi.index')->with('success', 'Dokumen berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Cari data employee berdasarkan ID
        $dimensis = Dimensi::findOrFail($id);

        // Kembalikan view edit dengan data employee
        return view('admin.dimensi.edit', compact('dimensis'));
    }

    // Function untuk mengupdate data employee
    public function update(Request $request, $id): RedirectResponse
    {
        // Validasi input (jadikan gambar opsional saat update)
        $request->validate([
            'judul' => 'required|string|max:50',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'deskripsi' => 'required|string|max:255',
        ]);

        // Cari quickwin berdasarkan ID
        $dimensis = Dimensi::findOrFail($id);

        // Cek apakah ada file gambar baru yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($dimensis->gambar && file_exists(public_path('uploads/dimensi/' . $dimensis->gambar))) {
                unlink(public_path('uploads/dimensi/' . $dimensis->gambar));
            }

            // Simpan gambar baru di direktori yang sama
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/dimensi/'), $filename); // Ubah path ke 'uploads/dimensi/'

            // Update nama file gambar pada model
            $dimensis->gambar = $filename;
        }

        // Update data quickwin lainnya
        $dimensis->judul = $request->judul;
        $dimensis->deskripsi = $request->deskripsi;
        $dimensis->save();

        // Redirect ke halaman yang diinginkan setelah update
        return redirect()->route('admin.dimensi.index')->with('success', 'Dokumen berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $dimensis = Dimensi::findOrFail($id);

        $dimensis->delete();

        return redirect()->route('admin.dimensi.index')->with('success', 'Status deleted successfully!');
    }
}
