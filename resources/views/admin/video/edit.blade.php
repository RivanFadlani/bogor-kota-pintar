<x-app-layout>
    <div class="container p-10 mx-auto">
        <h1 class="text-2xl font-bold mb-4">Edit Video</h1>

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
        <form action="{{ route('admin.video.update', $videos->id) }}" class="bg-white border-2 p-10 rounded-xl"
            method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

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
                        class="w-full text-gray-700 tracking-wider text-left text-sm font-medium p-2 border border-gray-300 rounded"
                        value="{{ old('judul', $videos->judul) }}">
                    @error('judul')
                        <span class="bg-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Input Judul End -->

                <!-- Input Judul Start -->
                <div class="mb-4 flex flex-wrap">
                    <label for="judul"
                        class="block mb-2 capitalize tracking-wider text-left text-sm font-medium text-gray-700">Link
                        Youtube</label>
                    <div class="relative group">
                        <span class="text-red-600 font-bold">*</span>
                        <span
                            class="absolute bottom-full mb-1 hidden group-hover:block bg-black text-white text-xs rounded px-2 py-1">
                            harus diisi
                        </span>
                    </div>
                    <input type="text" name="youtube_link" id="judul"
                        class="w-full text-gray-700 tracking-wider text-left text-sm font-medium p-2 border border-gray-300 rounded"
                        value="{{ old('youtube_link', $videos->youtube_link) }}" required>
                    @error('youtube_link')
                        <span class="bg-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Input Judul End -->
                <p class="text-red-600 font-medium mb-5">Contoh penginputan link:
                    https://youtu.be/iSU-mzNYbQ4?si=eRvf7LDObY7OuTOu atau
                    https://www.youtube.com/watch?v=iSU-mzNYbQ4</p>
            </div>

            {{-- Status Start --}}
            <div class="mb-4 flex flex-wrap">
                <label class="block capitalize tracking-wider text-left text-sm font-medium"
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
                    <option value="publish" {{ old('status', $videos->status) == 'publish' ? 'selected' : '' }}>
                        Publish</option>
                    <option value="tidak publish"
                        {{ old('status', $videos->status) == 'tidak publish' ? 'selected' : '' }}>Tidak Publish
                    </option>
                </select>
                @error('status')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            {{-- Status End --}}

            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded">Simpan Perubahan</button>
            </div>
        </form>
        <!-- Form untuk menambah quickwin End -->
        <script src="/ckeditor/ckeditor.js"></script>
</x-app-layout>
