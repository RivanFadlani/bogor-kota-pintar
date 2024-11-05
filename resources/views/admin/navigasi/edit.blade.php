<x-app-layout>
    <div class="container p-10 mx-auto">
        <h1 class="text-2xl font-bold mb-4">Edit Navigasi</h1>

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

        <!-- Navigasi Form Start -->
        <form action="{{ route('admin.navigasi.update', $navigasis->id) }}" class="bg-white border-2 p-10 rounded-xl"
            method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Input Judul Start --}}
            <div class="mb-4">
                <label for="nav" class="block text-gray-700">Navigasi</label>
                <input type="text" name="nav" id="nav" class="w-full p-2 border border-gray-300 rounded"
                    value="{{ old('nav', $navigasis->nav) }}" required>
                @error('nav')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>
            {{-- Input Judul End --}}

            <!-- Input Link Start -->
            <div class="mb-4">
                <label for="url" class="block text-gray-700">Link</label>
                <input type="text" name="url" id="url" class="w-full p-2 border border-gray-300 rounded"
                    value="{{ old('link', $navigasis->url) }}" required>
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
        <!-- Navigasi Form End -->
</x-app-layout>
