<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen flex">
        <!-- Page Layout Wrapper -->
        <div class="flex">
            <!-- Sidebar - Fixed Position -->
            <aside class="fixed left-0 top-0 w-64 h-screen bg-white shadow-xl overflow-y-auto z-10">
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-6 text-gray-800 uppercase tracking-wider border-b pb-4">
                        Menu</h2>
                    <nav>
                        <ul class="space-y-2">
                            <!-- Dashboard -->
                            {{-- <li>
                                <a href="{{ route('admin.dashboard.index') }}"
                                    class="block p-3 rounded-lg transition-colors duration-200
                                   {{ request()->routeIs('admin.dashboard.index') ? 'bg-blue-500 text-white' : 'text-gray-700 hover:bg-gray-50' }}">
                                    Dashboard
                                </a>
                            </li> --}}

                            {{-- <!-- Quickwins -->
                            <li>
                                <a href="{{ route('admin.quickwin.index') }}"
                                    class="block p-3 rounded-lg transition-colors duration-200
                                   {{ request()->routeIs('admin.quickwin.index') ? 'bg-blue-500 text-white' : 'text-gray-700 hover:bg-gray-50' }}">
                                    Quickwins
                                </a>
                            </li> --}}

                            <!-- Masterplan dan PPT Dropdown -->
                            <li class="relative" x-data="{ open: false }">
                                <button @click="open = !open" @click.away="open = false"
                                    class="w-full flex items-center justify-between p-3 rounded-lg text-left transition-colors duration-200
                                        {{ request()->routeIs('admin.dokumen.index') || request()->routeIs('admin.kategori.index')
                                            ? 'bg-blue-50 text-blue-600'
                                            : 'text-gray-700 hover:bg-gray-50' }}">
                                    <span class="capitalize tracking-wider font-medium">Dokumen</span>
                                    <svg class="w-4 h-4 transition-transform duration-200"
                                        :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <ul class="mt-2 space-y-1 transition-all duration-200" x-show="open"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 transform scale-95"
                                    x-transition:enter-end="opacity-100 transform scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="opacity-100 transform scale-100"
                                    x-transition:leave-end="opacity-0 transform scale-95" style="display: none;">
                                    <li>
                                        <a href="{{ route('admin.dokumen.index') }}"
                                            class="block pl-8 pr-4 py-2 capitalize tracking-wider font-medium rounded-lg transition-colors duration-200
                                           {{ request()->routeIs('admin.dokumen.index') ? 'bg-blue-500 text-white' : 'text-gray-600 hover:bg-gray-50' }}">
                                            Dokumen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.kategori.index') }}"
                                            class="block pl-8 pr-4 py-2 rounded-lg capitalize tracking-wider font-medium transition-colors duration-200
                                           {{ request()->routeIs('admin.kategori.index') ? 'bg-blue-500 text-white' : 'text-gray-600 hover:bg-gray-50' }}">
                                            Kategori
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Remaining menu items -->
                            <li>
                                <a href="{{ route('admin.visimisi.index') }}"
                                    class="block p-3 rounded-lg transition-colors duration-200 capitalize tracking-wider font-medium
                                   {{ request()->routeIs('admin.visimisi.index') ? 'bg-blue-500 text-white' : 'text-gray-700 hover:bg-gray-50' }}">
                                    Visi dan Misi
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('permission.index') }}"
                                    class="block p-3 rounded-lg transition-colors duration-200 capitalize tracking-wider font-medium
                                   {{ request()->routeIs('permission.index') ? 'bg-blue-500 text-white' : 'text-gray-700 hover:bg-gray-50' }}">
                                    Permission
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('roles.index') }}"
                                    class="block p-3 rounded-lg transition-colors duration-200 capitalize tracking-wider font-medium
                                   {{ request()->routeIs('roles.index') ? 'bg-blue-500 text-white' : 'text-gray-700 hover:bg-gray-50' }}">
                                    Roles
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.programimp.index') }}"
                                    class="block p-3 rounded-lg transition-colors duration-200 capitalize tracking-wider font-medium
                                   {{ request()->routeIs('admin.programimp.index') ? 'bg-blue-500 text-white' : 'text-gray-700 hover:bg-gray-50' }}">
                                    Program Implementasi
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.dimensi.index') }}"
                                    class="block p-3 rounded-lg transition-colors duration-200 capitalize tracking-wider font-medium
                                   {{ request()->routeIs('admin.dimensi.index') ? 'bg-blue-500 text-white' : 'text-gray-700 hover:bg-gray-50' }}">
                                    Dimensi
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.booklet.index') }}"
                                    class="block p-3 rounded-lg transition-colors duration-200 capitalize tracking-wider font-medium
                                   {{ request()->routeIs('admin.booklet.index') ? 'bg-blue-500 text-white' : 'text-gray-700 hover:bg-gray-50' }}">
                                    Booklet
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.subdimensi.index') }}"
                                    class="block p-3 rounded-lg transition-colors duration-200 capitalize tracking-wider font-medium
                                   {{ request()->routeIs('admin.subdimensi.index') ? 'bg-blue-500 text-white' : 'text-gray-700 hover:bg-gray-50' }}">
                                    Sub Dimensi
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.video.index') }}"
                                    class="block p-3 rounded-lg transition-colors duration-200 capitalize tracking-wider font-medium
                                   {{ request()->routeIs('admin.video.index') ? 'bg-blue-500 text-white' : 'text-gray-700 hover:bg-gray-50' }}">
                                    Video
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.roadmap.index') }}"
                                    class="block p-3 rounded-lg transition-colors duration-200 capitalize tracking-wider font-medium
                                   {{ request()->routeIs('admin.roadmap.index') ? 'bg-blue-500 text-white' : 'text-gray-700 hover:bg-gray-50' }}">
                                    Road Map
                                </a>
                            </li>

                            <!-- Penilaian dan Sertifikat Dropdown -->
                            <li class="relative" x-data="{ open: false }">
                                <button @click="open = !open" @click.away="open = false"
                                    class="w-full flex items-center justify-between p-3 rounded-lg text-left transition-colors duration-200
                                        {{ request()->routeIs('admin.penilaian.index') || request()->routeIs('admin.penilaian.index')
                                            ? 'bg-blue-50 text-blue-600'
                                            : 'text-gray-700 hover:bg-gray-50' }}">
                                    <span class="capitalize tracking-wider font-medium">Hasil Penilaian</span>
                                    <svg class="w-4 h-4 transition-transform duration-200"
                                        :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <ul class="mt-2 space-y-1 transition-all duration-200" x-show="open"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 transform scale-95"
                                    x-transition:enter-end="opacity-100 transform scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="opacity-100 transform scale-100"
                                    x-transition:leave-end="opacity-0 transform scale-95" style="display: none;">
                                    <li>
                                        <a href="{{ route('admin.penilaian.index') }}"
                                            class="block pl-8 pr-4 py-2 rounded-lg transition-colors duration-200 capitalize tracking-wider font-medium
                                           {{ request()->routeIs('admin.penilaian.index') ? 'bg-blue-500 text-white' : 'text-gray-600 hover:bg-gray-50' }}">
                                            Penilaian
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.sertifikat.index') }}"
                                            class="block pl-8 pr-4 py-2 rounded-lg transition-colors duration-200 capitalize tracking-wider font-medium
                                           {{ request()->routeIs('admin.sertifikat.index') ? 'bg-blue-500 text-white' : 'text-gray-600 hover:bg-gray-50' }}">
                                            Sertifikat Penghargaan
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('admin.navigasi.index') }}"
                                    class="block p-3 rounded-lg transition-colors duration-200 capitalize tracking-wider font-medium
                                   {{ request()->routeIs('admin.navigasi.index') ? 'bg-blue-500 text-white' : 'text-gray-700 hover:bg-gray-50' }}">
                                    Navigasi
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>

            <!-- Main Content - Pushed to the right -->
            <div class="flex-1 pl-64 "> <!-- ml-64 matches sidebar width -->

                <div class="fixed top-0 right-0 left-64 z-10">
                    <!-- Top Navigation -->
                    @include('layouts.navigation')

                    <!-- Page Header -->
                    @if (isset($header))
                        <header class="bg-white shadow">
                            <div class="max-w-full mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endif
                </div>

                <div class="absolute top-0 right-0 left-64">
                    <!-- Main Content Area -->
                    <main class="px-6 py-14">
                        {{ $slot }}
                    </main>
                </div>

            </div>
        </div>

    </div>

    {{-- JS START --}}
    <script>
        const dropdownButton = document.getElementById('dokumenDropdown');
        const dropdownMenu = document.getElementById('dropdownMenu');

        dropdownButton.addEventListener('click', () => {
            // Toggle the hidden class when the button is clicked
            dropdownMenu.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside the menu
        document.addEventListener('click', (event) => {
            const isClickInside = dropdownButton.contains(event.target);

            // If clicked outside of dropdown and the menu is open, hide it
            if (!isClickInside && !dropdownMenu.classList.contains('hidden')) {
                dropdownMenu.classList.add('hidden');
            }
        });
    </script>
    {{-- JS END --}}
</body>

</html>
