<x-app-layout>
    <div class="container p-10 mx-auto">
        <h1 class="text-2xl font-bold mb-4">Tambah Dimensi</h1>

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

        <!-- Form untuk menambah quickwin start -->
        <form action="{{ route('admin.dimensi.store') }}" class="bg-white border-2 p-10 rounded-xl" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-2 gap-4">
                <!-- Input Judul Start -->
                <div class="mb-4 flex flex-wrap">
                    <label for="judul"
                        class="block mb-2 capitalize tracking-wider text-left text-sm font-medium text-gray-700">Judul</label>
                    <div class="relative group">
                        <span class="text-red-600 font-bold">*</span>
                        <span
                            class="absolute bottom-full mb-1 hidden group-hover:block bg-black text-white text-xs rounded px-2 py-1">
                            harus diisi
                        </span>
                    </div>
                    <input type="text" name="judul" id="judul"
                        class="w-full p-2 border mb-7 border-gray-300 rounded" value="{{ old('judul') }}" required>
                    @error('judul')
                        <span class="bg-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Input Judul End -->

                <!-- Input untuk Upload Gambar start -->
                <div class="mb-4 flex flex-wrap">
                    <label for="gambar"
                        class="block mb-2 capitalize tracking-wider text-left text-sm font-medium text-gray-700">Upload
                        Gambar</label>
                    <div class="relative group">
                        <span class="text-red-600 font-bold">*</span>
                        <span
                            class="absolute bottom-full mb-1 hidden group-hover:block bg-black text-white text-xs rounded px-2 py-1">
                            harus diisi
                        </span>
                    </div>
                    <input type="file" name="gambar" id="gambar"
                        class="w-full p-2 border bg-white border-gray-300 rounded" value="{{ old('gambar') }}" required>
                    <p class="text-red-500">Ukuran maks. file gambar: 1 MB / 1024 KB</p>
                </div>
                <!-- Input untuk Upload Gambar end -->
            </div>

            <!-- Input Deskripsi Start -->
            <div class="mb-4 flex flex-wrap">
                <label for="deskripsi"
                    class="block mb-2 capitalize tracking-wider text-left text-sm font-medium text-gray-700">Deskripsi</label>
                <div class="relative group w-1/2">
                    <span class="text-red-600 font-bold">*</span>
                    <span
                        class="absolute bottom-full mb-1 hidden group-hover:block bg-black text-white text-xs rounded px-2 py-1">
                        harus diisi
                    </span>
                </div>
                <textarea name="deskripsi" id="deskripsi" class="w-full p-2 border border-gray-300 rounded ckeditor" required>{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>
            <!-- Input Deskripsi End -->

            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded">Tambah Dokumen</button>
            </div>
        </form>
        <!-- Form untuk menambah quickwin end -->
    </div>
    <script src="/ckeditor/ckeditor.js"></script>
</x-app-layout>
