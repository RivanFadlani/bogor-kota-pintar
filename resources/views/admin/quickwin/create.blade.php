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

        <!-- Form untuk menambah quickwin start -->
        <form action="{{ route('admin.quickwin.store') }}" class="bg-white border-2 p-10 rounded-xl" method="POST"
            enctype="multipart/form-data">
            @csrf

            <!-- Input untuk Upload Gambar start -->
            <div class="mb-4">
                <label for="gambar" class="block text-gray-700">Upload Gambar:</label>
                <input type="file" name="gambar" id="gambar"
                    class="w-full p-2 border bg-white border-gray-300 rounded" value="{{ old('gambar') }}" required>
            </div>
            <!-- Input untuk Upload Gambar end -->


            <div class="grid grid-cols-2 gap-4">
                <!-- Input Judul Start -->
                <div class="mb-4">
                    <label for="judul" class="block text-gray-700">Judul</label>
                    <input type="text" name="judul" id="judul"
                        class="w-full p-2 border border-gray-300 rounded" value="{{ old('judul') }}" required>
                    @error('judul')
                        <span class="bg-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Input Judul End -->

                {{-- Input Tahun Start --}}
                <div class="mb-4">
                    <label for="tahun" class="block text-gray-700">Tahun</label>
                    <input type="date" name="tahun" id="tahun"
                        class="w-full p-2 border border-gray-300 rounded" value="{{ old('tahun') }}" required>
                    @error('tahun')
                        <span class="bg-red-500">{{ $message }}</span>
                    @enderror
                </div>
                {{-- Input Tahun End --}}
            </div>

            <!-- Input Deskripsi Start -->
            <div class="mb-4">
                <label for="deskripsi" class="block text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="w-full p-2 border border-gray-300 rounded" required>{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>
            <!-- Input Deskripsi End -->

            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Dokumen</button>
            </div>
        </form>
        <!-- Form untuk menambah quickwin end -->
    </div>
</x-app-layout>
