<x-app-layout>
    <div class="container p-10 mx-auto">
        <h1 class="text-2xl font-bold mb-4">Tambah Penilaian</h1>

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
        <form action="{{ route('admin.penilaian.store') }}" class="bg-white border-2 p-10 rounded-xl" method="POST"
            enctype="multipart/form-data">
            @csrf

            <!-- Input Judul Start -->
            <div class="mb-4">
                <label for="judul" class="block text-gray-700">Judul</label>
                <input type="text" name="judul" id="judul" class="w-full p-2 border border-gray-300 rounded"
                    value="{{ old('judul') }}">
                @error('judul')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>
            <!-- Input Judul End -->

            <!-- Input Nilai Start -->
            <div class="mb-4">
                <label for="nilai" class="block text-gray-700">nilai</label>
                <input type="nilai" name="nilai" id="nilai" class="w-full p-2 border border-gray-300 rounded"
                    value="{{ old('nilai') }}">
                @error('nilai')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>
            <!-- Input Nilai End -->


            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Penilaian</button>
            </div>
        </form>
        <!-- Dokumen Form Start -->
    </div>

    <script src="/ckeditor/ckeditor.js"></script>
</x-app-layout>
