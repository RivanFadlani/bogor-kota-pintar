<x-app-layout>
    <div class="container px-10 mx-auto mt-10">
        <div class="bg-white border border-gray-300 rounded-xl shadow-lg p-5">
            <h1 class="text-2xl font-bold mb-4">Daftar Quickwin</h1>

            <a href="{{ route('admin.quickwin.create') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Quickwin</a>

            <div class="w-full h-[0.1px] border-b-2 border-gray-300 border-dashed mb-4"></div>

            <table class="min-w-full rounded-xl bg-white border border-slate-300 overflow-hidden display"
                id="quickwinTable">
                <thead>
                    <tr>
                        <th class="px-4 py-2 bg-slate-100 text-start border">Gambar</th>
                        <th class="px-4 py-2 bg-slate-100 text-start border">Judul</th>
                        <th class="px-4 py-2 bg-slate-100 text-start border">Deskripsi</th>
                        <th class="px-4 py-2 bg-slate-100 text-start border">Tahun</th>
                        <th class="px-4 py-2 bg-slate-100 text-start border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($quickwins as $quickwin)
                        <tr>
                            <td class="px-4 py-2 border">
                                <img src="{{ asset('uploads/quickwin/' . $quickwin->gambar) }}" alt="Foto Pelapor"
                                    class="w-10">
                            </td>
                            <td class="border px-4 py-2">{{ $quickwin->judul }}</td>
                            <td class="border px-4 py-2">{{ $quickwin->deskripsi }}</td>
                            <td class="border px-4 py-2">{{ $quickwin->tahun }}</td>
                            <td class="border px-4 py-2">
                                {{-- Edit Button Start --}}
                                <a href="{{ route('admin.quickwin.edit', $quickwin->id) }}"
                                    class="px-4 py-2 bg-blue-600 text-white rounded">Edit</a> |
                                {{-- Edit Button End --}}

                                {{-- Delete Form Start --}}
                                <form id="delete-form-{{ $quickwin->id }}"
                                    action="{{ route('admin.quickwin.destroy', $quickwin->id) }}" method="POST"
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="px-4 py-2 bg-red-600 text-white rounded"
                                        onclick="openModal('{{ route('admin.quickwin.destroy', $quickwin->id) }}')">
                                        Hapus
                                    </button>
                                </form>
                                {{-- Delete Form End --}}
                            </td>
                        </tr>
                        <!-- Modal Konfirmasi Hapus Start -->

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
                        <!-- Modal Konfirmasi Hapus End -->
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- <div class="mt-4">
            {{ $quickwins->links() }} // Pagination Bawaan Laravel
        </div> --}}
    </div>

    {{-- Script Start --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //message with sweetalert
        @if (session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif (session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif

        $(document).ready(function() {
            // Hapus inisialisasi DataTable jika sudah ada sebelumnya
            if ($.fn.DataTable.isDataTable('#quickwinTable')) {
                $('#quickwinTable').DataTable().destroy();
            }

            // Inisialisasi DataTable kembali
            $('#quickwinTable').DataTable({
                paging: true,
                pageLength: 5, // Menentukan jumlah maksimal baris per halaman
                lengthMenu: [10, 25, 50, 100] // Opsi jumlah baris per halaman
            });
        });

        function openModal(action) {
            document.getElementById('deleteModal').classList.remove('hidden');
            document.getElementById('delete-form').action = action;
        }

        function closeModal() {
            document.getElementById('deleteModal').classList.add('hidden');
        }
    </script>
    {{-- Script End --}}

</x-app-layout>
