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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-lg p-4">
            <div class="p-6">
                <h2 class="text-xl font-semibold mb-4">Menu</h2>
                <ul>
                    <li><a href="/admin/dashboard" class="block py-2 px-4 text-gray-700 hover:bg-gray-100">Dashboard</a>
                    </li>
                    <li><a href="/admin/quickwin" class="block py-2 px-4 text-gray-700 hover:bg-gray-100">Quickwins</a>
                    </li>
                    <li><a href="/admin/dokumen" class="block py-2 px-4 text-gray-700 hover:bg-gray-100">Dokumen</a>
                    </li>
                    <li><a href="/admin/kategori" class="block py-2 px-4 text-gray-700 hover:bg-gray-100">Kategori
                            Dokumen</a>
                    </li>
                    <li><a href="/admin/visimisi" class="block py-2 px-4 text-gray-700 hover:bg-gray-100">Visi dan
                            Misi</a>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>
