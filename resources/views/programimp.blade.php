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
    <script src="/js/script.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    @vite('resources/css/app.css')
    <title>Program Implementasi</title>
</head>

<body>

    {{-- Header Section Start --}}
    <header class="w-full p-3 absolute lg:max-w-full mx-auto">

        <div class="container">
            <nav class="w-full border-gray-200 relative">
                <div
                    class="w-full px-10 lg:px-28 flex flex-wrap items-center justify-between lg:gap-x-10 lg:justify-start lg:space-x-8">
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

                    <!-- Navbar content start -->
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
                                <a href="/general"
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
                                            <a href="/penilaian"
                                                class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Hasil
                                                Penilaian</a>
                                        </li>
                                        <li>
                                            <a href="/programimp"
                                                class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Program
                                                Implementasi</a>
                                        </li>
                                        <li>
                                            <a href="https://bsw.kotabogor.go.id/"
                                                class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2"
                                                target="_blank">Layanan</a>
                                        </li>
                                        @foreach ($navigasis as $navigasi)
                                            <li>
                                                <a href="{{ $navigasi->url }}"
                                                    class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2"
                                                    target="_blank">{{ $navigasi->nav }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <!-- Navbar content end -->
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
                    class="w-full h-full bg-gradient-to-t from-primary rounded-bl-[150px] self-center p-10 px-4 lg:px-24 relative">
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
    <section id="" class="pl-3 pt-10 pb-32">
        @foreach ($getProgram as $program)
            <div class="slide-up w-full p-10">
                <div class="px-16 border border-gray-300 shadow-xl rounded-2xl py-10 sm:mx-7">
                    <h1 class="page-title text-primary text-[34px] text-center font-bold mt-5 mb-10 block">
                        {{ $program->judul }}
                    </h1>
                    <img class="rounded-xl mx-auto" src="{{ asset('uploads/ProgramImplementasi/' . $program->gambar) }}"
                        alt="Image description w-full" />
                </div>
            </div>
        @endforeach
    </section>
    {{-- Program Section End --}}

    {{-- Footer Start --}}

    <section id="contact" class="pt-24 pb-32 bg-primary">
        <div class="w-full">
            <div class="px-4 sm:mx-7 text-center">
                <h1 class="text-3xl font-semibold text-white">Smart City Kota Bogor</h1>
            </div>
            <div class="px-4 sm:mx-7 grid grid-cols-1 gap-x-3 md:grid-cols-2 lg:grid-cols-4 mt-14 justify-center">
                <div class="telp text-center grid">
                    <h2 class="text-white text-2xl font-medium mb-1">Telp</h2>
                    <h3 class="text-indigo-400 text-lg">+62251 - 8321075</h3>
                </div>
                <div class="email text-center grid">
                    <h2 class="text-white text-2xl font-medium mb-1">Email - Informasi</h2>
                    <h3 class="text-indigo-400 text-lg">bag.humas@kotabogor.go.id</h3>
                </div>
                <div class="email text-center grid">
                    <h2 class="text-white text-2xl font-medium mb-1">Email - Admin</h2>
                    <h3 class="text-indigo-400 text-lg">kominfo@kotabogor.go.id</h3>
                </div>
                <div class="email text-center grid">
                    <h2 class="text-white text-2xl font-medium mb-1">Website - Pengaduan</h2>
                    <h3 class="text-indigo-400 text-lg">sibadra.kotabogor.go.id</h3>
                </div>
            </div>

            <div class="px-4 sm:mx-7 flex flex-wrap gap-3 mt-14 justify-center">
                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M12.037 21.998a10.313 10.313 0 0 1-7.168-3.049 9.888 9.888 0 0 1-2.868-7.118 9.947 9.947 0 0 1 3.064-6.949A10.37 10.37 0 0 1 12.212 2h.176a9.935 9.935 0 0 1 6.614 2.564L16.457 6.88a6.187 6.187 0 0 0-4.131-1.566 6.9 6.9 0 0 0-4.794 1.913 6.618 6.618 0 0 0-2.045 4.657 6.608 6.608 0 0 0 1.882 4.723 6.891 6.891 0 0 0 4.725 2.07h.143c1.41.072 2.8-.354 3.917-1.2a5.77 5.77 0 0 0 2.172-3.41l.043-.117H12.22v-3.41h9.678c.075.617.109 1.238.1 1.859-.099 5.741-4.017 9.6-9.746 9.6l-.215-.002Z"
                        clip-rule="evenodd" />
                </svg>

                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                        clip-rule="evenodd" />
                </svg>

                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z" />
                </svg>


                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd"
                        d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                        clip-rule="evenodd" />
                </svg>
            </div>

            <div class="px-4 sm:mx-7 flex flex-col gap-x-3 mt-5 text-center">
                <h2 class="text-white font-semibold text-2xl">Statistik Pengunjung</h2>
                <div class="flex flex-wrap gap-x-3 text-center justify-center">
                    <h3 class="text-indigo-400 text-lg">Hari Ini: {{ $todayVisitors }}</h3>
                    <h3 class="text-indigo-400 text-lg">Total Pengunjung: {{ $totalVisitors }}</h3>
                </div>
            </div>

            <!-- New section for "Supported by" text and image link -->
            <div class="px-4 sm:mx-7 mt-5 text-center ">
                <h3 class="text-white font-semibold mb-3">Supported by</h3>
                <a href="https://bsw.kotabogor.go.id" target="_blank" rel="noopener noreferrer">
                    <img src="/img/bsw.png" class="mx-auto w-64 h-auto">
                </a>
            </div>

            <div class="px-4 sm:mx-7 mt-10 text-center">
                <h3 class="text-white text-lg">Copyright © 2024 Dinas Komunikasi dan Informatika Kota Bogor. All
                    Right Reserved
                </h3>
            </div>
        </div>
    </section>

    {{-- Footer End --}}

    {{-- JS START --}}

    {{-- Scroll reveal Start --}}
    <script src="/js/script.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    {{-- Scroll reveal End --}}

    <script src="public/js/pagedone.js"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>

    {{-- Navbar Transparant to White Start --}}
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
    {{-- Navbar Transparant to White Start --}}

    {{-- Navbar Nav Link Color Start --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');

            function updateNavColors() {
                const scrollPosition = window.scrollY;

                navLinks.forEach(link => {
                    if (scrollPosition > 0) {
                        link.classList.remove('text-white');
                        link.classList.add('text-slate-800');
                    } else {
                        link.classList.remove('text-slate-800');
                        link.classList.add('text-white');
                    }
                });
            }

            // Initial check
            updateNavColors();

            // Add scroll event listener
            window.addEventListener('scroll', updateNavColors);
        });
    </script>
    {{-- Navbar Nav Link Color Endc --}}

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
