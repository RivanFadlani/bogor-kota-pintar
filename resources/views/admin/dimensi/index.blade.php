<x-app-layout>
    <div class="min-h-screen bg-gray-50 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="mb-8">
                <div class="flex justify-between items-center">
                    <h1 class="text-3xl font-bold text-gray-900">Daftar Dimensi</h1>
                    <a href="{{ route('admin.dimensi.create') }}"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow transition duration-150 ease-in-out">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Tambah Dimensi
                    </a>
                </div>
                <div class="mt-4 flex justify-between items-center bg-white p-4 rounded-lg shadow-sm">
                    <div class="relative">
                        {{-- search form start --}}
                        <form action="{{ route('admin.dimensi.index') }}" method="GET" class="flex">
                            <input type="text" name="query" value="{{ old('query', $query) }}"
                                placeholder="Cari Dimensi..."
                                class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                            <div class="absolute left-3 top-2.5">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <button type="submit"
                                class="w-full h-full ms-2 px-5 py-2 rounded-lg bg-blue-600 text-white">Cari</button>
                        </form>
                        {{-- search form end --}}
                        @if ($query)
                            <p class="font-medium mt-3">Hasil dari: {{ $query }}</p>
                            <!-- Menampilkan teks hasil pencarian -->
                        @endif
                    </div>
                    <div class="flex items-center">
                        {{-- entries per page start --}}
                        <div class="flex items-center">
                            <form method="GET" action="{{ route('admin.dimensi.index') }}"
                                class="flex items-center space-x-2">
                                <label for="per_page" class="text-sm font-medium text-gray-700">Show</label>
                                <select name="per_page" id="per_page" onchange="this.form.submit()"
                                    class="rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    @foreach ($allowedPerPage as $value)
                                        <option value="{{ $value }}" {{ $perPage == $value ? 'selected' : '' }}>
                                            {{ $value }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-sm text-gray-700">entries</span>

                                <!-- Preserve existing sort parameters -->
                                <input type="hidden" name="sort_by" value="{{ $sortField }}">
                                <input type="hidden" name="direction" value="{{ $sortDirection }}">
                            </form>
                        </div>
                        {{-- entries per page end --}}
                    </div>
                </div>
            </div>

            <!-- Table Section -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200" id="dimensiTable">
                        <thead>
                            <tr class="bg-gray-50">
                                {{-- ascending descending start --}}
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    <a href="{{ route('admin.dimensi.index', [
                                        'sort_by' => 'judul',
                                        'direction' => $sortField === 'judul' && $sortDirection === 'asc' ? 'desc' : 'asc',
                                        'per_page' => $perPage,
                                    ]) }}"
                                        class="group inline-flex items-center gap-x-2 hover:text-blue-600">
                                        Judul
                                        <span class="inline-flex flex-col items-center">
                                            @if ($sortField === 'judul')
                                                @if ($sortDirection === 'asc')
                                                    <svg class="w-3 h-3 text-blue-600" viewBox="0 0 24 24"
                                                        fill="currentColor">
                                                        <path d="M12 5l8 8H4z" />
                                                    </svg>
                                                @else
                                                    <svg class="w-3 h-3 text-blue-600" viewBox="0 0 24 24"
                                                        fill="currentColor">
                                                        <path d="M12 19l-8-8h16z" />
                                                    </svg>
                                                @endif
                                            @else
                                                <svg class="w-3 h-3 text-gray-400 group-hover:text-blue-600"
                                                    viewBox="0 0 24 24" fill="currentColor">
                                                    <path d="M12 5l8 8H4z" />
                                                </svg>
                                            @endif
                                        </span>
                                    </a>
                                </th>
                                {{-- ascending descending end --}}
                                <th
                                    class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Gambar</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Deskripsi</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($items as $dimensi)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $dimensi->judul }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <img src="{{ asset('uploads/dimensi/' . $dimensi->gambar) }}" alt="dokumen"
                                            class="h-20 w-20 object-cover rounded-lg shadow-sm hover:shadow-md transition-shadow cursor-pointer"
                                            onclick="openImageModal(this.src)">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {!! $dimensi->deskripsi !!}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                        <a href="{{ route('admin.dimensi.edit', $dimensi->id) }}"
                                            class="inline-flex items-center px-3 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                            Edit
                                        </a>
                                        <button onclick="openDeleteModal('{{ $dimensi->id }}')"
                                            class="inline-flex items-center px-3 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md transition">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Table Footer with Pagination -->
                <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                    <div class="flex items-center justify-between">
                        <div class="flex-1 flex justify-between sm:hidden">
                            <a href="#"
                                class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Previous
                            </a>
                            <a href="#"
                                class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Next
                            </a>
                        </div>
                        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                            <div>
                                <p class="text-sm text-gray-700">
                                    Admin Smart City
                                </p>
                            </div>
                            <div>
                                {{-- Paginate Start --}}

                                <!-- Pagination -->
                                <div class="mt-4">
                                    {{ $items->appends([
                                            'sort_by' => $sortField,
                                            'direction' => $sortDirection,
                                            'per_page' => $perPage,
                                        ])->links() }}
                                </div>

                                <!-- Showing entries info -->
                                <div class="mt-4 text-sm text-gray-600">
                                    Showing {{ $items->firstItem() ?? 0 }} to {{ $items->lastItem() ?? 0 }} of
                                    {{ $items->total() }} entries
                                </div>

                                {{-- Paginate End --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delete Modal -->
            <div id="deleteModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title"
                role="dialog" aria-modal="true">
                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                    <div
                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div
                                    class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                    <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                </div>
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                        Konfirmasi Hapus
                                    </h3>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">
                                            Apakah Anda yakin ingin menghapus dimensi ini? Tindakan ini tidak dapat
                                            dibatalkan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <form id="deleteForm" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                    Hapus
                                </button>
                            </form>
                            <button type="button" onclick="closeDeleteModal()"
                                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                Batal
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image Preview Modal -->
            <div id="imageModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title"
                role="dialog" aria-modal="true">
                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                    <div
                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full">
                        <div class="bg-white p-4">
                            <div class="flex justify-end">
                                <button onclick="closeImageModal()" class="text-gray-400 hover:text-gray-500">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <div class="mt-2">
                                <img id="modalImage" src="" alt="Preview"
                                    class="max-w-full h-auto mx-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Success and Error Messages
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'BERHASIL!',
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                toast: true,
                position: 'top-end'
            });
        @elseif (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'GAGAL!',
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                toast: true,
                position: 'top-end'
            });
        @endif

        // Table Search Functionality
        document.getElementById('tableSearch').addEventListener('keyup', function() {
            let searchText = this.value.toLowerCase();
            let table = document.getElementById('dimensiTable');
            let rows = table.getElementsByTagName('tr');

            for (let i = 1; i < rows.length; i++) {
                let showRow = false;
                let cells = rows[i].getElementsByTagName('td');

                for (let j = 0; j < cells.length; j++) {
                    let cellText = cells[j].textContent || cells[j].innerText;
                    if (cellText.toLowerCase().indexOf(searchText) > -1) {
                        showRow = true;
                        break;
                    }
                }

                rows[i].style.display = showRow ? '' : 'none';
            }
        });

        // Entries Per Page
        document.getElementById('entriesPerPage').addEventListener('change', function() {
            let rowsPerPage = parseInt(this.value);
            let table = document.getElementById('dimensiTable');
            let rows = table.getElementsByTagName('tr');
            let totalRows = rows.length - 1; // Exclude header row
            let pages = Math.ceil(totalRows / rowsPerPage);

            // Show only the first n rows
            for (let i = 1; i <= totalRows; i++) {
                rows[i].style.display = i <= rowsPerPage ? '' : 'none';
            }

            // Update pagination if needed
            // You might want to implement a more sophisticated pagination system here
        });

        // Delete Modal Functions
        function openDeleteModal(dimensiId) {
            const modal = document.getElementById('deleteModal');
            const form = document.getElementById('deleteForm');
            form.action = `/admin/dimensi/${dimensiId}`;
            modal.classList.remove('hidden');
        }

        function closeDeleteModal() {
            document.getElementById('deleteModal').classList.add('hidden');
        }

        // Image Preview Modal Functions
        function openImageModal(imgSrc) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            modalImg.src = imgSrc;
            modal.classList.remove('hidden');
        }

        function closeImageModal() {
            document.getElementById('imageModal').classList.add('hidden');
        }

        // Close modals when clicking outside
        window.onclick = function(event) {
            const deleteModal = document.getElementById('deleteModal');
            const imageModal = document.getElementById('imageModal');
            if (event.target == deleteModal || event.target == imageModal) {
                deleteModal.classList.add('hidden');
                imageModal.classList.add('hidden');
            }
        }

        // Sort table columns
        document.querySelectorAll('th').forEach(header => {
            header.addEventListener('click', function() {
                const table = document.getElementById('dimensiTable');
                const rows = Array.from(table.querySelectorAll('tbody tr'));
                const index = Array.from(this.parentElement.children).indexOf(this);
                const isNumeric = !isNaN(rows[0].children[index].textContent);
                let direction = this.classList.contains('sort-asc') ? -1 : 1;

                // Sort rows
                rows.sort((a, b) => {
                    let x = a.children[index].textContent.trim();
                    let y = b.children[index].textContent.trim();

                    if (isNumeric) {
                        x = parseFloat(x);
                        y = parseFloat(y);
                    }

                    return x > y ? direction : -direction;
                });

                // Update sort direction indicator
                this.classList.toggle('sort-asc');
                this.classList.toggle('sort-desc');

                // Update table body
                const tbody = table.querySelector('tbody');
                tbody.innerHTML = '';
                rows.forEach(row => tbody.appendChild(row));
            });
        });
    </script>
</x-app-layout>
