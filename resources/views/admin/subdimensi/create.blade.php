<x-app-layout>
    <div class="container p-10 mx-auto">
        <h1 class="text-2xl font-bold mb-4">Tambah Sub Dimensi</h1>

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
        <form action="{{ route('admin.subdimensi.store') }}" class="bg-white border-2 p-10 rounded-xl" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-2 gap-4">
                <!-- Input Dimensi Start -->
                <div class="mb-4">
                    <label for="dimensi" class="block text-gray-700">Dimensi</label>
                    <input type="text" name="dimensi" id="dimensi"
                        class="w-full p-2 border border-gray-300 rounded" value="{{ old('dimensi') }}" required>
                    @error('dimensi')
                        <span class="bg-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Input Dimensi End -->

                <!-- Input Dimensi Start -->
                <div class="mb-4">
                    <label for="subdimensi" class="block text-gray-700">Sub Dimensi</label>
                    <input type="text" name="sub" id="subdimensi"
                        class="w-full p-2 border border-gray-300 rounded" value="{{ old('subdimensi') }}" required>
                    @error('subdimensi')
                        <span class="bg-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Input Dimensi End -->
            </div>

            <!-- Input Deskripsi Start -->
            <div class="mb-4">
                <label for="deskripsi" class="block text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="w-full p-2 border border-gray-300 rounded ckeditor" required>{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>
            <!-- Input Deskripsi End -->

            <!-- Input untuk Upload Gambar start -->
            <div class="mb-4">
                <label for="gambar" class="block text-gray-700">Upload Gambar:</label>
                <input type="file" name="gambar" id="gambar"
                    class="w-full p-2 border bg-white border-gray-300 rounded" value="{{ old('gambar') }}" required>
            </div>
            <!-- Input untuk Upload Gambar end -->

            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Dokumen</button>
            </div>
        </form>
        <!-- Form untuk menambah quickwin end -->
    </div>
    <script src="/ckeditor/ckeditor.js"></script>
</x-app-layout>
