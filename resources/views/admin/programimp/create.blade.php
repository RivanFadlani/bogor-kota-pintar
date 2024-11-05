<x-app-layout>
    <div class="container p-10 mx-auto">
        <h1 class="text-2xl font-bold mb-4">Tambah Program</h1>

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
        <form action="{{ route('admin.programimp.store') }}" class="bg-white border-2 p-10 rounded-xl" method="POST"
            enctype="multipart/form-data">
            @csrf

            <!-- Input Judul Start -->
            <div class="mb-4">
                <label for="judul" class="block text-gray-700">Judul Program</label>
                <input type="text" name="judul" id="judul" class="w-full p-2 border border-gray-300 rounded"
                    value="{{ old('judul') }}" required>
                @error('judul')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>
            <!-- Input Judul End -->
            <!-- Input Upload Gambar Start -->
            <div class="mb-4">
                <label for="gambar" class="block text-gray-700">Upload Gambar:</label>
                <input type="file" name="gambar" id="gambar"
                    class="w-full p-2 border bg-white border-gray-300 rounded" value="{{ old('gambar') }}" required>
                <p class="text-red-500">Ukuran maks. file gambar: 1 MB / 1024 KB</p>
            </div>
            <!-- Input Upload Gambar End -->

            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Dokumen</button>
            </div>
        </form>
        <!-- Dokumen Form Start -->
    </div>
</x-app-layout>
