<x-app-layout>
    <div class="container mx-auto">
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
        <form action="{{ route('admin.dokumen.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Input untuk Judul -->
            <div class="mb-4">
                <label for="judul" class="block text-gray-700">Judul Dokumen:</label>
                <input type="text" name="judul" id="judul" class="w-full p-2 border border-gray-300 rounded"
                    value="{{ old('judul') }}" required>
                @error('judul')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Input untuk Upload Gambar -->
            <div class="mb-4">
                <label for="file_foto" class="block text-gray-700">Upload Gambar:</label>
                <input type="file" name="file_foto" id="file_foto" class="w-full p-2 border border-gray-300 rounded"
                    required>
            </div>

            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Dokumen</button>
            </div>
        </form>
    </div>
</x-app-layout>
