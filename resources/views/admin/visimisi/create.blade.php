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

        <!-- Dokumen Form Start -->
        <form action="{{ route('admin.visimisi.store') }}" class="bg-white border-2 p-10 rounded-xl" method="POST"
            enctype="multipart/form-data">
            @csrf

            <!-- Input Visi Start -->
            <div class="mb-4 flex flex-wrap">
                <label for="visi"
                    class="block mb-2 capitalize tracking-wider text-left text-sm font-medium text-gray-700">Visi</label>
                <div class="relative group">
                    <span class="text-red-600 font-bold">*</span>
                    <span
                        class="absolute bottom-full mb-1 hidden group-hover:block bg-black text-white text-xs rounded px-2 py-1">
                        harus diisi
                    </span>
                </div>
                <input type="text" name="visi" id="visi"
                    class="w-full text-gray-700 tracking-wider text-left text-sm font-medium  p-2 border border-gray-300 rounded"
                    value="{{ old('visi') }}" required>
                @error('visi')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>
            <!-- Input Visi End -->

            <!-- Textarea Misi Start -->
            <div class="mb-4 flex flex-wrap">
                <label for="misi"
                    class="block mb-2 capitalize tracking-wider text-left text-sm font-medium text-gray-700">Misi</label>
                <div class="relative w-1/2 group">
                    <span class="text-red-600 font-bold">*</span>
                    <span
                        class="absolute bottom-full mb-1 hidden group-hover:block bg-black text-white text-xs rounded px-2 py-1">
                        harus diisi
                    </span>
                </div>
                <textarea name="misi" id="misi" class="w-full p-2 border border-gray-300 rounded ckeditor" required>{{ old('misi') }}</textarea>
                @error('misi')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>
            <!-- Textarea Misi End -->

            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded">Tambah Dokumen</button>
            </div>
        </form>
        <!-- Dokumen Form Start -->
    </div>

    <script src="/ckeditor/ckeditor.js"></script>
</x-app-layout>
