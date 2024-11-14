<x-app-layout>
    <div class="container p-10 mx-auto">
        <h1 class="text-2xl font-bold mb-4">Tambah Road Map</h1>

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
        <form action="{{ route('admin.roadmap.store') }}" class="bg-white border-2 p-10 rounded-xl" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-2 gap-4">
                <!-- Input Dimensi Start -->
                <div class="mb-4 flex flex-wrap">
                    <label for="Judul"
                        class="block mb-2 capitalize tracking-wider text-left text-sm font-medium text-gray-700">Judul</label>
                    <div class="relative group">
                        <span class="text-red-600 font-bold">*</span>
                        <span
                            class="absolute bottom-full mb-1 hidden group-hover:block bg-black text-white text-xs rounded px-2 py-1">
                            harus diisi
                        </span>
                    </div>
                    <input type="text" name="judul" id="judul"
                        class="w-full text-gray-700 tracking-wider text-left text-sm font-medium p-2 mb-7 border border-gray-300 rounded"
                        value="{{ old('judul') }}">
                    @error('judul')
                        <span class="bg-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Input Dimensi End -->

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

            {{-- Status Start --}}
            <div class="flex flex-wrap">
                <label for="status"
                    class="block mb-2 capitalize tracking-wider text-left text-sm font-medium">Status:</label>
                <div class="relative group">
                    <span class="text-red-600 font-bold">*</span>
                    <span
                        class="absolute bottom-full mb-1 hidden group-hover:block bg-black text-white text-xs rounded px-2 py-1">
                        harus diisi
                    </span>
                </div>
                <select id="status" name="status"
                    class="block w-full p-2 border-gray-300 text-gray-700 tracking-wider text-left text-sm font-medium rounded"
                    required>
                    <option value="" disabled {{ old('status') == '' ? 'selected' : '' }}>Silahkan pilih
                        status</option>
                    <option value="publish" {{ old('status') == 'publish' ? 'selected' : '' }}>Publish</option>
                    <option value="tidak publish" {{ old('status') == 'tidak publish' ? 'selected' : '' }}>Tidak
                        Publish</option>
                </select>
                @error('status')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            {{-- Status End --}}

            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="bg-blue-700 mt-5 text-white px-4 py-2 rounded">Tambah Road Map</button>
            </div>
        </form>
        <!-- Form untuk menambah quickwin end -->
    </div>
    <script src="/ckeditor/ckeditor.js"></script>
</x-app-layout>
