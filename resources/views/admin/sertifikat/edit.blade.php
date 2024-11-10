<x-app-layout>
    <div class="container p-10 mx-auto">
        <h1 class="text-2xl font-bold mb-4">Edit Sertifikat</h1>

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
        <form action="{{ route('admin.sertifikat.update', $sertifikats->id) }}" class="bg-white border-2 p-10 rounded-xl"
            method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <!-- Input Judul Start -->
                <div class="mb-4 flex flex-wrap">
                    <label for="judul"
                        class="block mb-2 capitalize tracking-wider text-left text-sm font-medium text-gray-700">Judul</label>
                    <input type="text" name="judul" id="judul"
                        class="w-full text-gray-700 tracking-wider text-left text-sm font-medium p-2 border border-gray-300 rounded"
                        value="{{ old('judul', $sertifikats->judul) }}">
                    @error('judul')
                        <span class="bg-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Input Judul End -->

                <!-- Input Upload Gambar Start -->
                <div class="mb-4">
                    <label for="gambar"
                        class="block mb-2 uppercase tracking-wider text-left text-sm font-medium text-gray-700">Upload
                        Gambar:</label>
                    <input type="file" name="gambar" id="gambar"
                        class="w-full p-2 border border-gray-300 rounded">
                    <p class="text-red-500">Ukuran maks. file gambar: 1 MB / 1024 KB</p>
                    <!-- Menampilkan nama file lama -->
                    @if ($sertifikats->gambar)
                        <div class="form-group">
                            <label class="block mb-2 capitalize tracking-wider text-left text-sm font-medium">Pratinjau
                                Gambar Saat Ini:</label>
                            <img src="{{ asset('uploads/sertifikat/' . $sertifikats->gambar) }}"
                                alt="{{ $sertifikats->judul }}" style="max-width: 200px; max-height: 200px;">
                        </div>
                    @endif
                </div>

                <!-- Input Upload Gambar End -->


            </div>

            <!-- Input Judul Start -->
            <div class="mb-4">
                <label for="kategori"
                    class="block mb-2 capitalize tracking-wider text-left text-sm font-medium text-gray-700">Kategori</label>
                <input type="text" name="kategori" id="kategori"
                    class="w-full text-gray-700 tracking-wider text-left text-sm font-medium p-2 border border-gray-300 rounded"
                    value="{{ old('kategori', $sertifikats->kategori) }}">
                @error('kategori')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>
            <!-- Input Judul End -->

            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded">Simpan Perubahan</button>
            </div>
        </form>
        <!-- Form untuk menambah quickwin End -->
        <script src="/ckeditor/ckeditor.js"></script>
</x-app-layout>
