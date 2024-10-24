<x-app-layout>
    <div class="container p-10 mx-auto">
        <h1 class="text-2xl font-bold mb-4">Tambah Dokumen</h1>

        <!-- Notifikasi kesuksesan -->
        @if (session('success'))
            <div class="bg-green-500 text-white p-3 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tampilkan error jika ada -->
        @if ($errors->any())
            <div class="bg-red-500 text-white p-3 mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form untuk menambah dokumen -->
        <form action="{{ route('admin.quickwin.update', $quickwins->id) }}" class="bg-white border-2 p-10 rounded-xl"
            method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Input untuk Upload Gambar -->
            <div class="mb-4">
                <label for="gambar" class="block text-gray-700">Upload Gambar:</label>
                <input type="file" name="gambar" id="gambar" class="w-full p-2 border border-gray-300 rounded"
                    value="{{ old('gambar', $quickwins->gambar) }}" required>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <!-- Input untuk Judul -->
                <div class="mb-4">
                    <label for="judul" class="block text-gray-700">Judul</label>
                    <input type="text" name="judul" id="judul"
                        class="w-full p-2 border border-gray-300 rounded" value="{{ old('judul', $quickwins->judul) }}"
                        required>
                    @error('judul')
                        <span class="bg-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="tahun" class="block text-gray-700">Tahun</label>
                    <input type="date" name="tahun" id="tahun"
                        class="w-full p-2 border border-gray-300 rounded" value="{{ old('tahun', $quickwins->tahun) }}"
                        required>
                    @error('tahun')
                        <span class="bg-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Input untuk Deskripsi -->
            <div class="mb-4">
                <label for="deskripsi" class="block text-gray-700">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" class="w-full p-2 border border-gray-300 rounded"
                    value="{{ old('deskripsi', $quickwins->deskripsi) }}" required>
                @error('deskripsi')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan Perubahan</button>
            </div>
        </form>
</x-app-layout>
