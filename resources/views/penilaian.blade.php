<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Program Implementasi</title>
</head>

<body>

    {{-- Header Section Start --}}
    <header class="w-full p-3 absolute lg:max-w-full mx-auto">

        <div class="container">
            <nav class="w-full border-gray-200 relative">
                <div
                    class="w-full px-10 flex flex-wrap items-center justify-between lg:gap-x-10 lg:justify-start lg:space-x-8">
                    <!-- Brand logo and title -->
                    <a class="flex items-center lg:w-auto w-full justify-between lg:justify-start">
                        <img src="/img/diskominfo.png" alt="" class="w-16">
                        <span class="self-center text-lg font-semibold whitespace-nowrap">Smart City</span>
                        <!-- Mobile button (hamburger icon) -->
                        <button data-collapse-toggle="mobile-menu" type="button"
                            class="lg:hidden ml-3 text-slate-800 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center"
                            aria-controls="mobile-menu-2" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </a>

                    <!-- Navbar content -->
                    <div class="hidden z-[9999] lg:flex flex-wrap w-full lg:w-auto justify-between lg:flex-row lg:items-center lg:space-x-4"
                        id="mobile-menu">
                        <ul class="flex-col lg:flex-row flex lg:space-x-4 mt-4 lg:mt-0 text-gray-700">
                            <li>
                                <a href="/general"
                                    class="block woa lg:inline-block text-slate-800 font-semibold pl-3 pr-4 py-2">Beranda</a>
                            </li>
                            <li>
                                <a href="/general"
                                    class="block lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Dimensi</a>
                            </li>
                            <li>
                                <a href="/general"
                                    class="block lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Visi
                                    & Misi</a>
                            </li>
                            <li>
                                <a href="/general"
                                    class="block lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Peserta
                                    IGA</a>
                            </li>
                            <li>
                                <a href="/general"
                                    class="block lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Quick
                                    Wins</a>
                            </li>
                            <li>
                                <a href="/general"
                                    class="block lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Masterplan</a>
                            </li>
                            <li>
                                <a href="/general"
                                    class="block lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Booklet</a>
                            </li>
                            <li>
                                <a href="/general"
                                    class="block lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Road
                                    Map</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Kontak</a>
                            </li>
                            <li>
                                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                    class="text-gray-700 hover:bg-gray-50 lg:hover:bg-transparent pl-3 pr-4 py-2 font-medium flex items-center justify-between w-full lg:w-auto">Dropdown
                                    <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg></button>
                                <!-- Dropdown menu -->
                                <div id="dropdownNavbar"
                                    class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
                                    <ul class="py-1" aria-labelledby="dropdownLargeButton">
                                        <li>
                                            <a href="#"
                                                class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Hasil
                                                Penilaian</a>
                                        </li>
                                        <li>
                                            <a href="/programimp"
                                                class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2"
                                                target="_blank">Program
                                                Implementasi</a>
                                        </li>
                                        <li>
                                            <a href="https://bsw.kotabogor.go.id/"
                                                class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2"
                                                target="_blank">Layanan</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>

    </header>

    {{-- Header Section End --}}

    {{-- Hero Section Start --}}
    <section id="beranda" class="overflow-hidden">
        <div class="container">
            <div class="w-screen h-[700px] bg-cover rounded-bl-[150px]"
                style="background-image: url(/img/bogor-wahyu-priyanto.jpg)">
                <div
                    class="w-full h-full bg-gradient-to-t from-primary rounded-bl-[150px] self-center p-10 px-4 relative">
                    <h1
                        class="text-5xl font-bold text-white text-center mt-64 mb-1 sm:text-start sm:ps-10 lg:text-[65px]">
                        Hasil Penilaian Smart City</h1>
                    <h2
                        class="text-3xl font-semibold text-white text-center mb-5 sm:text-start sm:ps-10 lg:text-[40px]">
                        Kota Bogor
                    </h2>

                </div>
            </div>
        </div>
    </section>
    {{-- Hero Section End --}}

    {{-- Program Section Start --}}
    <section id="" class="pl-3 pt-10 pb-10">
        <div class="w-full">
            <div class="px-4 lg:px-24 sm:mx-7">
                <div class="bg-white border border-gray-300 shadow-xl p-6 rounded-2xl">
                    <h2 class="page-title text-primary text-5xl font-bold mb-7 text-center">
                        Hasil Nilai Smart City
                    </h2>

                    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 gap-3">
                        @foreach ($penilaians as $penilaian)
                            <!-- Card 1 -->
                            <div
                                class="bg-gradient-to-r from-primary to-slate-300 rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 border border-gray-300">
                                <div class="flex items-center bg-white/10 backdrop-blur-sm p-6 rounded-2xl">
                                    <div class="flex-1">
                                        <h3 class="text-xl font-bold text-white mb-2">
                                            {{ $penilaian->judul }}
                                        </h3>
                                        <div class="text-white/80 text-sm">
                                            Hasil Nilai
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-center justify-center ml-6">
                                        <div
                                            class="bg-white rounded-full w-24 h-24 flex items-center justify-center shadow-lg">
                                            <div class="text-center">
                                                <div
                                                    class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-purple-500">
                                                    {{ $penilaian->nilai }}
                                                </div>
                                                <div class="text-xs text-gray-500 mt-1">
                                                    Nilai
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>


        </div>
    </section>
    {{-- Program Section End --}}

    <section class="pl-3 pt-10 pb-32">
        {{-- Gallery Start --}}
        <div class="px-4 lg:px-24 mb-7 sm:mx-7">
            @foreach ($sertifikats as $sertifikat)
                <h2 class="text-5xl font-bold mb-7">{{ $sertifikat->judul }}</h2>
            @endforeach
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                @foreach ($sertifikats as $sertifikat)
                    <div class="rounded-2xl h-fit shadow-xl overflow-hidden hover:-translate-y-1 transition-transform">
                        <img src="{{ asset('uploads/sertifikat/' . $sertifikat->gambar) }}"
                            alt="{{ $sertifikat->judul }}">
                    </div>
                @endforeach
            </div>

        </div>
        {{-- Gallery End --}}

        {{-- Kategori Start --}}
        <div class="px-4 lg:px-24 sm:mx-7">

            <div class=" w-full h-full p-10 bg-white border border-gray-300 shadow-xl rounded-2xl">
                @foreach ($sertifikats as $sertifikat)
                    <div class="w-full mb-5 py-3 px-7 border border-gray-300 rounded-xl bg-slate-100">
                        {{ $sertifikat->kategori }}</div>
                @endforeach
            </div>
        </div>
        {{-- Kategori End --}}
    </section>

    {{-- JS START --}}
    <script src="public/js/pagedone.js"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>

    <script>
        // Navbar Fixed
        window.onscroll = function() {
            const header = document.querySelector('header');
            const fixedNav = header.offsetTop;

            if (window.pageYOffset > fixedNav) {
                header.classList.add('navbar-fixed')
            } else {
                header.classList.remove('navbar-fixed')
                header.classList.remove('text-white')
            }
        }
    </script>

    <script>
        const navLinks = document.querySelector('.nav-links')

        function onToggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>
    {{-- JS END --}}
</body>

</html>
