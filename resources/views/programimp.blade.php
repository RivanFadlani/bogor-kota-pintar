<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/pagedone.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Program Implementasi</title>
</head>

<body>

    {{-- Header Start --}}
    <div class="max-w-2xl lg:max-w-full mx-auto">
        <nav class="border-gray-200">
            <div
                class="w-full px-10 flex flex-wrap items-center justify-between lg:gap-x-10 lg:justify-start lg:space-x-8">
                <!-- Brand logo and title -->
                <a href="#" class="flex items-center lg:w-auto w-full justify-between lg:justify-start">
                    <img src="/img/diskominfo.png" alt="" class="w-16">
                    <span class="self-center text-lg font-semibold whitespace-nowrap">Smart City</span>
                    <!-- Mobile button (hamburger icon) -->
                    <button data-collapse-toggle="mobile-menu" type="button"
                        class="lg:hidden ml-3 text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                <div class="hidden lg:flex flex-wrap w-full lg:w-auto justify-between lg:flex-row lg:items-center  lg:space-x-4"
                    id="mobile-menu">
                    <ul class="flex-col lg:flex-row flex lg:space-x-4 mt-4 lg:mt-0 text-gray-700">
                        <li>
                            <a href="#beranda"
                                class="block lg:inline-block border-b font-semibold text-black lg:text-blue-700 pl-3 pr-4 py-2">Beranda</a>
                        </li>
                        <li>
                            <a href="#dimensi"
                                class="block lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Dimensi</a>
                        </li>
                        <li>
                            <a href="#visidanmisi"
                                class="block lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Visi
                                & Misi</a>
                        </li>
                        <li>
                            <a href="#pesertaiga"
                                class="block lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Peserta
                                IGA</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Quick
                                Wins</a>
                        </li>
                        <li>
                            <a href="#masterplan"
                                class="block lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Masterplan</a>
                        </li>
                        <li>
                            <a href="#booklet"
                                class="block lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Booklet</a>
                        </li>
                        <li>
                            <a href="#roadmap"
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
                                        <a href="#"
                                            class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Program
                                            Implementasi</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Layanan</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    {{-- Header End --}}

    {{-- Hero Section Start --}}
    <section>
        <div class="container mx-auto flex justify-between items-center text-white p-4 bg-primary rounded-br-[50px]">
            <div class="text-lg font-bold">
                <p class="pl-10 text-4xl font-bold text-white capitalize text-wrap mt-20">
                    Program Implementasi
                </p>
                <p class="pl-10 text-4xl font-bold mb-20 text-white capitalize text-wrap">
                    Smart City Kota Bogor
                </p>
            </div>
            <div class="text-xl pr-10">
                <p>Home Program</p>
            </div>
        </div>
    </section>
    {{-- Hero Section End --}}

    {{-- Program Section Start --}}
    <section id="" class="pl-3 pt-10 pb-32">
        <div class="w-full">
            <div class="px-4 sm:mx-7">
                <h1 class="text-[34px] font-bold mt-5 mb-5 block">
                    Smart Governance
                </h1>
                <img src="imple.jpeg" alt="Image description w-full" />
            </div>
        </div>
    </section>
    {{-- Program Section End --}}

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
