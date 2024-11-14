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

    {{-- Scroll To Top $ Scroll Progress Start --}}
    <button class="scroll-top-btn">
        <svg class="progress-ring" width="70" height="70"> <!-- Ubah ukuran SVG -->
            <circle class="progress-ring__circle" r="32" cx="35" cy="35" />
            <!-- Sesuaikan radius dan posisi circle -->
        </svg>
    </button>
    {{-- Scroll To Top $ Scroll Progress End --}}

    {{-- Header Section Start --}}
    <header class="w-full p-3 absolute lg:max-w-full mx-auto">

        <div class="container">
            <nav class="w-full border-gray-200 relative">
                <div
                    class="w-full px-10 lg:px-28 flex flex-wrap items-center justify-between lg:gap-x-10 lg:justify-start lg:space-x-8">
                    <!-- Brand logo and title -->
                    <a class="nav-link flex items-center lg:w-auto w-full justify-between lg:justify-start">
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
                                    class="block nav-link woa lg:inline-block text-slate-800 font-semibold pl-3 pr-4 py-2">Beranda</a>
                            </li>
                            <li>
                                <a href="/general"
                                    class="block nav-link lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Dimensi</a>
                            </li>
                            <li>
                                <a href="/general"
                                    class="block nav-link lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Visi
                                    & Misi</a>
                            </li>
                            <li>
                                <a href="/general"
                                    class="block nav-link lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Masterplan</a>
                            </li>
                            <li>
                                <a href="/general"
                                    class="block nav-link lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Booklet</a>
                            </li>
                            <li>
                                <a href="/general"
                                    class="block nav-link lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Road
                                    Map</a>
                            </li>
                            <li>
                                <a href="#contact"
                                    class="block nav-link lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Kontak</a>
                            </li>
                            <li>
                                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                    class="nav-link text-gray-700 hover:bg-gray-50 lg:hover:bg-transparent pl-3 pr-4 py-2 font-medium flex items-center justify-between w-full lg:w-auto">Lainnya
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
                            <li>
                                <!-- Google Translate Trigger Button (gambar Google Translate) -->
                                <button id="translateButton" class="border-none bg-none mt-2 p-0">
                                    <img src="https://www.google.com/images/icons/product/translate-32.png"
                                        alt="Google Translate" style="cursor: pointer;">
                                </button>

                                <!-- Google Translate Widget -->
                                <div id="google_translate_element" class="hidden absolute z-[1000] text-center">
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
                                class="slide-up bg-gradient-to-r from-primary to-gray-400 rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 border border-gray-300">
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
                                                    class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-primary">
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
                    <div
                        class="slide-up rounded-2xl h-fit shadow-xl overflow-hidden hover:-translate-y-1 transition-transform">
                        <img src="{{ asset('uploads/sertifikat/' . $sertifikat->gambar) }}"
                            alt="{{ $sertifikat->judul }}">
                    </div>
                @endforeach
            </div>

        </div>
        {{-- Gallery End --}}

        {{-- Kategori Start --}}
        <div class="px-4 lg:px-24 sm:mx-7">

            <div class=" w-full h-full p-5 bg-white border border-gray-300 shadow-xl rounded-2xl">
                @foreach ($sertifikats as $sertifikat)
                    <div class="slide-up w-full py-1 px-7">
                        {{ $sertifikat->kategori }}</div>
                @endforeach
            </div>
        </div>
        {{-- Kategori End --}}
    </section>

    {{-- Footer Start --}}

    <section id="contact" class="pt-12 pb-8 bg-primary">
        <div class="w-full">
            <div class="px-2 sm:mx-4 text-center">
                <h1 class="text-3xl font-semibold text-white">Smart City Kota Bogor</h1>
            </div>
            <div class="px-2 sm:mx-4 grid grid-cols-1 gap-x-1.5 md:grid-cols-2 lg:grid-cols-4 mt-7 justify-center">
                <div class="telp text-center grid">
                    <h2 class="text-white text-lg font-medium mb-0.5">Telp</h2>
                    <h3 class="text-indigo-400 text-base">+62251 - 8321075</h3>
                </div>
                <div class="email text-center grid">
                    <h2 class="text-white text-lg font-medium mb-0.5">Email - Informasi</h2>
                    <h3 class="text-indigo-400 text-base">bag.humas@kotabogor.go.id</h3>
                </div>
                <div class="email text-center grid">
                    <h2 class="text-white text-lg font-medium mb-0.5">Email - Admin</h2>
                    <h3 class="text-indigo-400 text-base">kominfo@kotabogor.go.id</h3>
                </div>
                <div class="email text-center grid">
                    <h2 class="text-white text-lg font-medium mb-0.5">Website - Pengaduan</h2>
                    <h3 class="text-indigo-400 text-base">sibadra.kotabogor.go.id</h3>
                </div>
            </div>

            <!-- Group Icons -->
            <div class="px-2 sm:mx-4 flex flex-wrap gap-4 mt-7 justify-center">
                <!-- Google Icon -->
                <div class="p-2 bg-white/10 rounded-full">
                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12.037 21.998a10.313 10.313 0 0 1-7.168-3.049 9.888 9.888 0 0 1-2.868-7.118 9.947 9.947 0 0 1 3.064-6.949A10.37 10.37 0 0 1 12.212 2h.176a9.935 9.935 0 0 1 6.614 2.564L16.457 6.88a6.187 6.187 0 0 0-4.131-1.566 6.9 6.9 0 0 0-4.794 1.913 6.618 6.618 0 0 0-2.045 4.657 6.608 6.608 0 0 0 1.882 4.723 6.891 6.891 0 0 0 4.725 2.07h.143c1.41.072 2.8-.354 3.917-1.2a5.77 5.77 0 0 0 2.172-3.41l.043-.117H12.22v-3.41h9.678c.075.617.109 1.238.1 1.859-.099 5.741-4.017 9.6-9.746 9.6l-.215-.002Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <!-- Facebook Icon -->
                <div class="p-2 bg-white/10 rounded-full">
                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <!-- Twitter/X Icon -->
                <div class="p-2 bg-white/10 rounded-full">
                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z" />
                    </svg>
                </div>
            </div>

            <!-- Statistik Pengunjung -->
            <div class="px-2 sm:mx-4 flex flex-col gap-x-1.5 mt-7 text-center">
                <h2 class="text-white font-semibold text-lg mb-0.5">Statistik Pengunjung</h2>
                <div class="flex flex-wrap gap-3 text-center justify-center">
                    <h3 class="text-indigo-400 text-base">Hari Ini: {{ $todayVisitors }}</h3>
                    <h3 class="text-indigo-400 text-base">Total Pengunjung: {{ $totalVisitors }}</h3>
                </div>
            </div>

            <!-- Supported By -->
            <div class="mt-7 text-center">
                <p class="text-white text-sm mb-2">Supported By</p>
                <div class="flex justify-center gap-4">
                    <img src="/img/bsw.png" alt="Support Logo 1" class="h-16 w-auto">
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center mt-7">
                <p class="text-white/80 text-xs">Copyright © 2024 Dinas Komunikasi dan Informatika Kota Bogor. All
                    Right Reserved</p>
            </div>
        </div>
    </section>

    {{-- Footer End --}}

    {{-- JS START --}}

    {{-- Scroll To Top $ Scroll Progress Start --}}
    <script type="text/javascript">
        const scrollButton = document.querySelector('.scroll-top-btn');
        const circle = document.querySelector('.progress-ring__circle');
        const radius = circle.r.baseVal.value;
        const circumference = radius * 2 * Math.PI;

        circle.style.strokeDasharray = `${circumference} ${circumference}`;
        circle.style.strokeDashoffset = circumference;

        function setProgress(percent) {
            const offset = circumference - (percent / 100 * circumference);
            circle.style.strokeDashoffset = offset;
        }

        function updateScroll() {
            const scrollTotal = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = window.scrollY;
            const scrollPercent = (scrolled / scrollTotal) * 100;

            setProgress(scrollPercent);

            if (scrolled > 300) {
                scrollButton.style.display = 'flex';
            } else {
                scrollButton.style.display = 'none';
            }
        }

        scrollButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        window.addEventListener('scroll', updateScroll);
    </script>
    {{-- Scroll To Top $ Scroll Progress End --}}

    {{-- Google Translate Widget Start --}}
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'id',
                layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL,
                autoDisplay: false
            }, 'google_translate_element');
        }

        document.getElementById("translateButton").onclick = function() {
            var translateElement = document.getElementById("google_translate_element");

            // Tampilkan elemen ketika tombol diklik
            if (translateElement.style.display === "none") {
                translateElement.style.display = "block";

                // Posisi elemen di bawah tombol dan digeser ke kiri sedikit
                var buttonRect = this.getBoundingClientRect();
                translateElement.style.top = buttonRect.bottom + 10 + "px"; // Jarak 10px di bawah tombol
                translateElement.style.left = buttonRect.left - 50 + "px"; // Geser 20px ke kiri dari posisi tombol
            } else {
                translateElement.style.display = "none"; // Sembunyikan jika diklik lagi
            }
        };
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    {{-- Google Translate Widget Start End --}}

    {{-- Scroll Reveal Start --}}
    <script src="/js/script.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    {{-- Scroll Reveal End --}}

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
    {{-- Navbar Transparant to White End --}}

    {{-- Navbar Link Color Start --}}
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
    {{-- Navbar Nav Link Color End --}}

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
