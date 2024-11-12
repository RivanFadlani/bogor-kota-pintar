<x-app-layout>
    <div class="container p-10 mx-auto">
        <h1 class="text-2xl font-bold mb-4">Create Users</h1>

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
        <form action="{{ route('users.store') }}" class="bg-white border-2 p-10 rounded-xl" method="POST"
            enctype="multipart/form-data">
            @csrf

            {{-- Input Judul Start --}}
            <div class="mb-4 flex flex-wrap">
                <label for="nav"
                    class="block capitalize tracking-wider text-left text-sm font-medium text-gray-700">Nama</label>
                <div class="relative group">
                    <span class="text-red-600 font-bold">*</span>
                    <span
                        class="absolute bottom-full mb-1 hidden group-hover:block bg-black text-white text-xs rounded px-2 py-1">
                        harus diisi
                    </span>
                </div>
                <input type="text" name="name" id="nav"
                    class="w-full text-gray-700 tracking-wider text-left text-sm font-medium p-2 border border-gray-300 rounded"
                    value="{{ old('name') }}">
                @error('nav')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>
            {{-- Input Judul End --}}

            {{-- Input Email Start --}}
            <div class="mb-4 flex flex-wrap">
                <label for="email"
                    class="block capitalize tracking-wider text-left text-sm font-medium text-gray-700">Email</label>
                <div class="relative group">
                    <span class="text-red-600 font-bold">*</span>
                    <span
                        class="absolute bottom-full mb-1 hidden group-hover:block bg-black text-white text-xs rounded px-2 py-1">
                        harus diisi
                    </span>
                </div>
                <input type="text" name="email" id="email"
                    class="w-full text-gray-700 tracking-wider text-left text-sm font-medium p-2 border border-gray-300 rounded"
                    value="{{ old('email') }}">
                @error('email')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>
            {{-- Input Email End --}}

            {{-- Input Password Start --}}
            <div class="mb-4 flex flex-wrap">
                <label for="password"
                    class="block capitalize tracking-wider text-left text-sm font-medium text-gray-700">Password</label>
                <div class="relative group">
                    <span class="text-red-600 font-bold">*</span>
                    <span
                        class="absolute bottom-full mb-1 hidden group-hover:block bg-black text-white text-xs rounded px-2 py-1">
                        harus diisi
                    </span>
                </div>
                <input type="password" name="password" id="password"
                    class="w-full text-gray-700 tracking-wider text-left text-sm font-medium p-2 border border-gray-300 rounded"
                    value="{{ old('password') }}">
                @error('password')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>
            {{-- Input Password End --}}

            {{-- Input Password Start --}}
            <div class="mb-4 flex flex-wrap">
                <label for="confirm_password"
                    class="block capitalize tracking-wider text-left text-sm font-medium text-gray-700">Confirm
                    Password</label>
                <div class="relative group">
                    <span class="text-red-600 font-bold">*</span>
                    <span
                        class="absolute bottom-full mb-1 hidden group-hover:block bg-black text-white text-xs rounded px-2 py-1">
                        harus diisi
                    </span>
                </div>
                <input type="password" name="confirm_password" id="confirm_password"
                    class="w-full text-gray-700 tracking-wider text-left text-sm font-medium p-2 border border-gray-300 rounded"
                    value="{{ old('confirm_password') }}">
                @error('confirm_password')
                    <span class="bg-red-500">{{ $message }}</span>
                @enderror
            </div>
            {{-- Input Password End --}}

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 mb-3">
                @if ($roles->isNotEmpty())
                    @foreach ($roles as $role)
                        <div>
                            <input type="checkbox" id="role-{{ $role->id }}" class="rounded" name="role[]"
                                value="{{ $role->name }}">
                            <label for="role-{{ $role->id }}">{{ $role->name }}</label>
                        </div>
                    @endforeach
                @endif
            </div>

            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded">Tambah Dokumen</button>
            </div>
        </form>
        {{-- Dokumen Form End --}}
    </div>
</x-app-layout>
