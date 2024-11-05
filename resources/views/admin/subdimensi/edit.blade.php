<x-app-layout>
    <div class="container p-10 mx-auto">
        <h1 class="text-2xl font-bold mb-4">Edit Sub Dimensi</h1>

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

        <!-- Form untuk menambah quickwin Start -->
        <form action="{{ route('admin.subdimensi.update', $subdimensis->id) }}" class="bg-white border-2 p-10 rounded-xl"
            method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-2 gap-4">
                <!-- Input Judul Start -->
                <div class="mb-4">
                    <label for="judul" class="block text-gray-700">Dimensi</label>
                    <input type="text" name="dimensi" id="judul"
                        class="w-full p-2 border border-gray-300 rounded"
                        value="{{ old('dimensi', $subdimensis->dimensi) }}" required>
                    @error('dimensi')
                        <span class="bg-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Input Judul End -->

                <!-- Input Judul Start -->
                <div class="mb-4">
                    <label for="judul" class="block text-gray-700">Sub Dimensi</label>
                    <input type="text" name="sub" id="judul"
                        class="w-full p-2 border border-gray-300 rounded" value="{{ old('sub', $subdimensis->sub) }}"
                        required>
                    @error('sub')
                        <span class="bg-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Input Judul End -->
            </div>

            <!-- Input Deskripsi Start -->
            <div class="mb-4">
                <label for="deskripsi" class="block text-gray-700">Misi</label>
                <textarea name="deskripsi" id="deskripsi" class="w-full p-2 border border-gray-300 rounded ckeditor" required>{{ old('deskripsi', $subdimensis->deskripsi) }}</textarea>
                @error('misi')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>
            <!-- Input Deskripsi End -->

            <!-- Input Upload Gambar Start -->
            <div class="mb-4">
                <label for="gambar" class="block text-gray-700">Upload Gambar:</label>
                <input type="file" name="gambar" id="gambar" class="w-full p-2 border border-gray-300 rounded">
                <p class="text-red-500">Ukuran maks. file gambar: 1 MB / 1024 KB</p>
                <!-- Menampilkan nama file lama -->
                @if ($subdimensis->gambar)
                    <p class="text-gray-500 mt-2">File saat ini: {{ $subdimensis->gambar }}</p>
                @endif
            </div>

            <!-- Input Upload Gambar End -->

            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan Perubahan</button>
            </div>
        </form>
        <!-- Form untuk menambah quickwin End -->
        <script src="/ckeditor/ckeditor.js"></script>
</x-app-layout>
