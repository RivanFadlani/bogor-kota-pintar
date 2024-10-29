<x-app-layout>
    <div class="container p-10 mx-auto">
        <h1 class="text-2xl font-bold mb-4">Edit Booklet</h1>

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

        <!-- Dokumen Form Start -->
        <form action="{{ route('admin.booklet.update', $booklets->id) }}" class="bg-white border-2 p-10 rounded-xl"
            method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Input Judul Start --}}
            <div class="mb-4">
                <label for="judul" class="block text-gray-700">Judul</label>
                <input type="text" name="judul" id="judul" class="w-full p-2 border border-gray-300 rounded"
                    value="{{ old('judul', $booklets->judul) }}" required>
                @error('judul')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>
            {{-- Input Judul End --}}

            <!-- Input Upload Gambar Start -->
            <div class="mb-4">
                <label for="gambar" class="block text-gray-700">Upload Gambar:</label>
                <input type="file" name="gambar" id="gambar" class="w-full p-2 border border-gray-300 rounded"
                    value="{{ old('gambar', $booklets->gambar) }}">

                <!-- Menampilkan nama file lama -->
                @if ($booklets->gambar)
                    <p class="text-gray-500 mt-2">File saat ini: {{ $booklets->gambar }}</p>
                @endif
            </div>

            <!-- Input Upload Gambar End -->

            <!-- Input Link Start -->
            <div class="mb-4">
                <label for="url" class="block text-gray-700">Link</label>
                <input type="text" name="url" id="url" class="w-full p-2 border border-gray-300 rounded"
                    value="{{ old('link', $booklets->url) }}" required>
                @error('url')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>
            {{-- Input Link End --}}

            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan Perubahan</button>
            </div>
        </form>
        <!-- Dokumen Form End -->
</x-app-layout>
