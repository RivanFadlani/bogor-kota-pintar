<?php

namespace App\Http\Controllers;

use App\Models\Roadmap;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class RoadmapController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:view road maps', only: ['index']),
            new Middleware('permission:edit road maps', only: ['edit']),
            new Middleware('permission:create road maps', only: ['create']),
            new Middleware('permission:delete road maps', only: ['destroy']),
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
        $items = DB::table('roadmaps')
            ->where('judul', 'like', '%' . $query . '%')
            ->orWhere('gambar', 'like', '%' . $query . '%')
            ->orderBy($sortField, $sortDirection) // asc, desc
            ->paginate($perPage) // Pagination
            ->appends(['query' => $query]);

        return view('admin.roadmap.index', [
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
        $roadmaps = Roadmap::all();

        return view('admin.roadmap.create', compact('roadmaps'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'status' => 'required|in:publish,tidak publish',
        ]);

        //upload foto KE file /uploads DI /storage
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $ext = $file->getClientOriginalExtension();
            $newName =  date('dmY') . Str::random(10) . '.' . $ext;
            $file->move('uploads/roadmap', $newName);
            $filename = $newName;
        }

        Roadmap::create([
            'judul' => $request->judul,
            'gambar' => $filename ?? '',
            'status' => $request->status,
        ]);
        return redirect()->route('admin.roadmap.index')->with('success', 'Dokumen berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Cari data employee berdasarkan ID
        $roadmaps = Roadmap::findOrFail($id);

        // Kembalikan view edit dengan data employee
        return view('admin.roadmap.edit', compact('roadmaps'));
    }

    // Function untuk mengupdate data employee
    public function update(Request $request, $id): RedirectResponse
    {
        // Validasi input (jadikan gambar opsional saat update)
        $request->validate([
            'judul' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'status' => 'required|in:publish,tidak publish',
        ]);

        // Cari quickwin berdasarkan ID
        $roadmaps = Roadmap::findOrFail($id);

        // Cek apakah ada file gambar baru yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($roadmaps->gambar && file_exists(public_path('uploads/roadmap/' . $roadmaps->gambar))) {
                unlink(public_path('uploads/roadmap/' . $roadmaps->gambar));
            }

            // Simpan gambar baru
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/roadmap/'), $filename);

            // Update nama file gambar pada model
            $roadmaps->gambar = $filename;
        }

        // Update data quickwin lainnya
        $roadmaps->judul = $request->judul;
        $roadmaps->status = $request->status;
        $roadmaps->save();

        // Redirect ke halaman yang diinginkan setelah update
        return redirect()->route('admin.roadmap.index')->with('success', 'Dokumen berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $roadmaps = Roadmap::findOrFail($id);

        $roadmaps->delete();

        return redirect()->route('admin.roadmap.index')->with('success', 'Status deleted successfully!');
    }
}
