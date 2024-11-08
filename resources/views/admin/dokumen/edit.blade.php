<x-app-layout>
    <div class="container p-10 mx-auto">
        <h1 class="text-2xl font-bold mb-4">Edit Dokumen</h1>

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
        <form action="{{ route('admin.dokumen.update', $dokumens->id) }}" class="bg-white border-2 p-10 rounded-xl"
            method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Input Judul Start --}}
            <div class="mb-4 flex flex-wrap">
                <label for="judul"
                    class="block mb-2 uppercase tracking-wider text-left text-sm font-medium">Judul</label>
                <div class="relative group">
                    <span class="text-red-600 font-bold">*</span>
                    <span
                        class="absolute bottom-full mb-1 hidden group-hover:block bg-black text-white text-xs rounded px-2 py-1">
                        harus diisi
                    </span>
                </div>
                <input type="text" name="judul" id="judul"
                    class="w-full p-2 border border-gray-300 text-gray-700 tracking-wider text-left text-sm font-medium rounded"
                    value="{{ old('judul', $dokumens->judul) }}" required>
                @error('judul')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>
            {{-- Input Judul End --}}

            <!-- Input Upload Gambar Start -->
            <div class="mb-4">
                <label for="gambar" class="block mb-2 uppercase tracking-wider text-left text-sm font-medium">Upload
                    Gambar (Thumbnail)</label>
                <input type="file" name="gambar" id="gambar" class="w-full p-2 border border-gray-300 rounded"
                    value="{{ old('gambar', $dokumens->gambar) }}">
                <p class="text-red-500">Ukuran maks. file gambar: 1 MB / 1024 KB</p>
                <!-- Menampilkan nama file lama -->
                @if ($dokumens->gambar)
                    <div class="form-group">
                        <label>Pratinjau Gambar Saat Ini:</label>
                        <img src="{{ asset('uploads/dokumen/' . $dokumens->gambar) }}" alt="{{ $dokumens->judul }}"
                            style="max-width: 200px; max-height: 200px;">
                    </div>
                @endif
            </div>

            <!-- Input Upload Gambar End -->

            <!-- Input Link Start -->
            <div class="mb-4 flex flex-wrap">
                <label for="url"
                    class="block mb-2 uppercase tracking-wider text-left text-sm font-medium">Link</label>
                <div class="relative group">
                    <span class="text-red-600 font-bold">*</span>
                    <span
                        class="absolute bottom-full mb-1 hidden group-hover:block bg-black text-white text-xs rounded px-2 py-1">
                        harus diisi
                    </span>
                </div>
                <input type="text" name="url" id="url"
                    class="w-full p-2 border-gray-300 text-gray-700 tracking-wider text-left text-sm font-medium rounded"
                    value="{{ old('link', $dokumens->url) }}" required>
                @error('url')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>
            {{-- Input Link End --}}

            {{-- Select Kategori & Status Start --}}
            <div class="grid grid-cols-2 gap-3">
                {{-- Kategori Select Start --}}
                <div class="mb-4 flex flex-wrap">
                    <label for="kategori_id"
                        class="block mb-2 uppercase tracking-wider text-left text-sm font-medium">Pilih
                        Kategori</label>
                    <div class="relative group">
                        <span class="text-red-600 font-bold">*</span>
                        <span
                            class="absolute bottom-full mb-1 hidden group-hover:block bg-black text-white text-xs rounded px-2 py-1">
                            harus diisi
                        </span>
                    </div>
                    <select name="kategori_id" id="kategori_id"
                        class="block w-full p-2 border-gray-300 text-gray-700 tracking-wider text-left text-sm font-medium rounded">
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}" @if (old('kategori_id', $dokumens->kategori_id ?? '') == $kategori->id) selected @endif>
                                {{ $kategori->kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>
                {{-- Kategori Select End --}}

                {{-- Status Start --}}
                <div class="mb-4 flex flex-wrap">
                    <label class="block uppercase tracking-wider text-left text-sm font-medium"
                        for="status">Status</label>
                    <div class="relative group">
                        <span class="text-red-600 font-bold">*</span>
                        <span
                            class="absolute bottom-full mb-1 hidden group-hover:block bg-black text-white text-xs rounded px-2 py-1">
                            harus diisi
                        </span>
                    </div>
                    <select
                        class="block w-full p-2 border-gray-300 text-gray-700 tracking-wider text-left text-sm font-medium rounded"
                        id="status" name="status" required>
                        <option value="publish" {{ old('status', $dokumens->status) == 'publish' ? 'selected' : '' }}>
                            Publish</option>
                        <option value="tidak publish"
                            {{ old('status', $dokumens->status) == 'tidak publish' ? 'selected' : '' }}>Tidak Publish
                        </option>
                    </select>
                    @error('status')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                {{-- Status End --}}
            </div>
            {{-- Select Kategori & Status Start --}}

            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="bg-blue-700 text-white mt-5 px-4 py-2 rounded">Simpan Perubahan</button>
            </div>
        </form>
        <!-- Dokumen Form End -->
</x-app-layout>
