<x-app-layout>
    <div class="container p-10 mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-4">Daftar Quickwin</h1>

        <a href="{{ route('admin.quickwin.create') }}"
            class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Quickwin</a>

        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="border px-4 py-2 text-start">No</th>
                    <th class="border px-4 py-2 text-start">Kategori</th>
                    <th class="border px-4 py-2 text-start">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategoris as $key => $item)
                    <tr>
                        <td class="border-b px-4 py-2">{{ $key + 1 }}</td>
                        <td class="border px-4 py-2">{{ $item->kategori }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('admin.kategori.edit', $item->id) }}"
                                class="px-4 py-2 bg-blue-600 text-white rounded">Edit</a> |
                            <form id="delete-form-{{ $item->id }}"
                                action="{{ route('admin.kategori.destroy', $item->id) }}" method="POST"
                                class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="px-4 py-2 bg-red-600 text-white rounded"
                                    onclick="openModal('{{ route('admin.kategori.destroy', $item->id) }}')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <!-- Modal Konfirmasi Hapus -->
                <div id="deleteModal" class="fixed z-50 inset-0 hidden overflow-y-auto"
                    aria-labelledby="deleteModalLabel" role="dialog" aria-modal="true">
                    <div class="flex items-center justify-center min-h-screen">
                        <div class="fixed inset-0 bg-black opacity-30"></div>
                        <div class="bg-white rounded-lg shadow-lg p-6 z-10">
                            <h2 class="text-lg font-bold mb-4" id="deleteModalLabel">Konfirmasi Hapus</h2>
                            <p>Apakah Anda yakin ingin menghapus item ini?</p>
                            <div class="flex justify-end mt-4">
                                <button type="button" class="mr-2 px-4 py-2 bg-gray-300 rounded"
                                    onclick="closeModal()">Batal</button>
                                <form id="delete-form" action="" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="px-4 py-2 bg-red-500 text-white rounded">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </tbody>
        </table>
        <div class="mt-4">
            {{ $quickwins->links() }}
        </div>
    </div>
    <script>
        function openModal(action) {
            document.getElementById('deleteModal').classList.remove('hidden');
            document.getElementById('delete-form').action = action;
        }

        function closeModal() {
            document.getElementById('deleteModal').classList.add('hidden');
        }
    </script>

</x-app-layout>