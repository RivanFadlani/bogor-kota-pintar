<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-lg">Tambah Quick Win</h1>
                    <hr>
                    <a href="{{ route('admin.quickwin.index') }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Kembali</a>

                    <form action="{{ route('admin.quickwin.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 gap-3">
                            <div class="grid">
                                <label>GAMBAR</label>
                                <input type="file" @error('gambar') is-invalid @enderror" name="gambar">

                                @error('gambar')
                                    <div class="bg-red-400 text-white mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="grid">
                                <label>JUDUL</label>
                                <input type="text" @error('judul') is-invalid @enderror" name="judul"
                                    value="{{ old('judul') }}" placeholder="Masukan Judul Product">

                                @error('judul')
                                    <div class="bg-red-400 text-white mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="grid">
                                <label>DESKRIPSI</label>
                                <input type="text" @error('deskripsi') is-invalid @enderror" name="judul"
                                    value="{{ old('judul') }}" placeholder="Masukan Judul Product">

                                @error('judul')
                                    <div class="bg-red-400 text-white mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="px-3 py-2 bg-primary text-white rounded-lg">SAVE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
