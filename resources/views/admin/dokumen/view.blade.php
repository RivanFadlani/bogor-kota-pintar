<x-app-layout>
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">Daftar Dokumen</h1>

    <a href="{{ route('admin.dokumen.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Dokumen</a>

    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="border-b-2 px-4 py-2">No</th>
                <th class="border-b-2 px-4 py-2">Judul Dokumen</th>
                <th class="border-b-2 px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dokumen as $key => $item)
                <tr>
                    <td class="border-b px-4 py-2">{{ $key + 1 }}</td>
                    <td class="border-b px-4 py-2">{{ $item->judul }}</td>
                    <td class="border-b px-4 py-2">
                        <!-- Tambahkan aksi lain jika perlu -->
                        <a href="#" class="text-blue-500">Edit</a> |
                        <a href="#" class="text-red-500">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>
