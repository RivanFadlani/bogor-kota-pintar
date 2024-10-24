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
        <form action="{{ route('admin.kategori.store') }}" class="bg-white border-2 p-10 rounded-xl" method="POST"
            enctype="multipart/form-data">
            @csrf

            <!-- Input untuk Judul -->
            <div class="mb-4">
                <label for="kategori" class="block text-gray-700">kategori</label>
                <input type="text" name="kategori" id="kategori" class="w-full p-2 border border-gray-300 rounded"
                    value="{{ old('kategori') }}" required>
                @error('kategori')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Dokumen</button>
            </div>
        </form>
    </div>
</x-app-layout>
