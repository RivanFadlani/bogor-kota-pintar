<!DOCTYPE html>
<html lang="en" class="scroll-smooth"> <!-- class="scroll-smooth" -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="/js/script.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <title>Smart City Bogor</title>
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
                    <a class="flex nav-link items-center lg:w-auto w-full justify-between lg:justify-start">
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
                                <a href="#beranda"
                                    class="block nav-link woa lg:inline-block text-slate-800 font-semibold pl-3 pr-4 py-2 hover:text-primary [&.a]">Beranda</a>
                            </li>
                            <li>
                                <a href="#content1"
                                    class="block nav-link lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Dimensi</a>
                            </li>
                            <li>
                                <a href="#content2"
                                    class="block nav-link lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Visi
                                    & Misi</a>
                            </li>
                            <li>
                                <a href="#content4"
                                    class="block nav-link lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Masterplan</a>
                            </li>
                            <li>
                                <a href="#content5"
                                    class="block nav-link lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Booklet</a>
                            </li>
                            <li>
                                <a href="#content6"
                                    class="block nav-link lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Road
                                    Map</a>
                            </li>
                            <li>
                                <a href="#contact"
                                    class="block nav-link lg:inline-block font-semibold hover:bg-gray-50 lg:hover:bg-transparent text-gray-700 border-b lg:border-0 pl-3 pr-4 py-2">Kontak</a>
                            </li>
                            <li>
                                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                    class="text-gray-700 nav-link hover:bg-gray-50 lg:hover:bg-transparent pl-3 pr-4 py-2 font-medium flex items-center justify-between w-full lg:w-auto">Lainnya
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
                    <h1 class="text-5xl font-bold text-white text-center mt-40 sm:text-start sm:ps-10 lg:text-[80px]">
                        Smart City</h1>
                    <h2
                        class="text-3xl font-semibold text-white text-center mb-5 sm:text-start sm:ps-10 lg:text-[40px]">
                        Kota Bogor
                    </h2>
                    <p
                        class="text-base font-semibold md:w-[600px] lg:w-[700px] text-slate-300 text-center mb-5 px-10 sm:text-start sm:ps-10">
                        Menyediakan informasi terkini mengenai layanan Pemerintah dan Agenda Pemerintah yang akan
                        mempermudah akses informasi bagi Masyarakat, sehingga transparansi data Pemerintah bisa
                        tercapai.</p>

                    <div class="flex justify-center sm:justify-start sm:ps-10">
                        <form class="relative">
                            <input type="text" id="searchInput"
                                class="w-72 lg:w-96 pl-10 pr-4 py-2 rounded-full shadow-sm border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="Cari...">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Section End --}}

    {{-- Dimensi Section Start --}}
    <section id="content1" class="pt-36 pb-32 content">
        <div class="w-full">
            <div class="px-4 lg:px-24 sm:mx-7">
                <h1 class="text-[48px] font-bold mb-5 text-primary block">Dimensi</h1>
                <!-- Google Translate Widget -->
                <div id="google_translate_element"></div>
            </div>
            <div class="flex flex-wrap gap-6 px-4 lg:px-24 sm:mx-7">
                {{-- card 1 --}}
                @foreach ($dimensis as $dimensi)
                    <div
                        class="slide-up relative flex flex-col w-full items-center border border-solid shadow-xl border-gray-200 rounded-2xl hover:-translate-y-1 transition-all duration-500 md:flex-row md:w-[48%] lg:w-[48%] overflow-hidden">
                        <div
                            class="block w-full items-center mx-auto overflow-hidden md:w-32 md:h-full h-32 bg-primary">
                            <img src="{{ asset('uploads/dimensi/' . $dimensi->gambar) }}" alt="dokumen"
                                class="w-24 py-7 px-5 mx-auto items-center">
                        </div>
                        <div class="p-4 w-full">
                            <h4 class="text-lg font-bold text-dark mb-2 capitalize transition-all duration-500">
                                {{ $dimensi->judul }}</h4>
                            <p class="text-sm font-normal text-gray-800 transition-all duration-500 leading-5">
                                {!! $dimensi->deskripsi !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Dimensi Section End --}}

    {{-- Visi dan Misi Section Start --}}
    <section id="content2" class="pt-24 bg-gradient-to-t from-gradient/30 lg:px-8 content">
        <div class="w-full h-full">
            <div class="px-4 lg:px-24 sm:mx-7 text-center">
                <h1 class="text-[48px] font-bold mb-7 block text-primary page-title">Visi dan Misi</h1>
            </div>

            <!-- Flex container untuk gambar di kanan dan card Visi di kiri -->
            <div class="flex flex-col md:flex-row md:items-center px-4 lg:px-24 sm:mx-7 lg:mx-auto">
                <!-- Card Visi (lebar full) -->
                <div
                    class="slide-up flex-grow w-full py-16 px-10 sm:py-16 sm:px-10 mt-4 flex bg-white rounded-3xl justify-start items-center shadow-[inset_0_4px_10px_rgba(0,0,0,0.4)] md:mt-0 md:mb-0 lg:mr-16">
                    <div class="w-full flex">
                        <h2 class="text-5xl font-bold mb-3">Visi</h2> <!-- Margin bawah dikurangi -->
                        @foreach ($visimisi as $vm)
                            <div class="px-6 ms-6 lg:pe-80 border-l-4 text-xl">
                                {{ $vm->visi }}
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Gambar di sebelah kanan card Visi -->
                <img src="/img/Visi.png" alt="visimisi"
                    class="slide-up h-full mb-4 hidden pt-7 md:w-72 md:hidden lg:w-[calc(30%-12px)] lg:block mx-auto md:mx-0">
                <!-- Gambar tetap disebelah kanan -->
            </div>

            <!-- Flex container untuk gambar di kiri dan card Misi di kanan serta video -->
            <div class="flex flex-col md:flex-col md:items-start px-4 lg:px-24 sm:mx-7 lg:mx-auto">
                <div class="flex flex-col md:flex-row w-full">
                    <!-- Gambar di sebelah kiri card Misi -->
                    <img src="/img/Visi.png" alt="visimisi"
                        class="slide-up h-full mb-4 hidden md:w-72 md:hidden lg:w-[calc(30%-12px)] lg:block md:mr-8 lg:mr-16 mx-auto md:mx-0">
                    <!-- Gambar tetap disebelah kiri -->

                    <!-- Card Misi (height menyesuaikan isi) -->
                    <div
                        class="slide-up flex-grow h-min w-full mt-5 py-16 px-10 sm:py-16 sm:px-10 mb-4 flex bg-white rounded-3xl justify-end items-start shadow-[inset_0_4px_10px_rgba(0,0,0,0.4)] md:mb-0">
                        <div class="w-full flex">
                            <h2 class="text-5xl pt-2 font-bold mb-3">Misi</h2> <!-- Margin bawah dikurangi -->
                            @foreach ($visimisi as $vm)
                                <ol class="list-disc ms-6 pl-9 border-l-4 text-xl">
                                    {!! $vm->misi !!}
                                </ol>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="pt-10 pb-16 bg-gradient-to-b from-gradient/30">
        <div class="w-full h-full">
            <div class="px-4 sm:mx-7">
                <!-- Video di bawah card -->
                @foreach ($videos as $video)
                    <div class="video-item">
                        @if (!is_null($video->judul) && $video->judul !== '')
                            <h2 class="text-5xl font-bold mb-7 block text-primary page-title text-center">
                                {{ $video->judul }}</h2>
                        @endif
                        @if ($video->getYouTubeEmbedUrl())
                            <iframe src="{{ $video->getYouTubeEmbedUrl() }}"
                                class="slide-up aspect-video w-full h-full lg:w-[87%] lg:h-[87%] rounded-xl mx-auto"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        @else
                            <p>Link video tidak valid atau tidak bisa di-embed.</p>
                        @endif
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    {{-- Visi dan Misi Section End --}}

    {{-- Sub Dimensi Section Start --}}
    <section id="content3" class="pt-24 pb-32 bg-gradient-to-t from-gradient/30 content">
        <div class="w-full">
            <div class="px-4 lg:px-24 sm:mx-7">
                <h1 class="text-[48px] font-bold mb-7 text-primary block">Sub Dimensi Smart City</h1>
            </div>
            <!-- button start -->
            <div class="filter-button-group px-4 lg:px-24 sm:mx-7 mb-5 flex flex-wrap gap-3">
                <button data-filter="*"
                    class="bg-transparent group hover:bg-primary text-primary font-semibold py-2 px-4 border border-primary rounded-lg shadow">
                    <span class="active group-hover:text-white">Semua</span>
                </button>
                @foreach ($dimensiList as $dimensi)
                    <button data-filter=".{{ strtolower($dimensi) }}"
                        class="bg-transparent group hover:bg-primary text-primary font-semibold py-2 px-4 border border-primary rounded-lg shadow">
                        <span class="group-hover:text-white">{{ $dimensi }}</span>
                    </button>
                @endforeach
            </div>
            <!-- button end -->

            <!-- card start -->
            <div id="product-list" class="w-full px-2  sm:px-8 lg:px-28 flex flex-wrap">
                @foreach ($subdimensis as $subdimensi)
                    <div
                        class="{{ strtolower($subdimensi->dimensi) }} slide-up relative bg-primary text-white m-2 p-6 hover:-translate-y-1 transition-all duration-500 rounded-lg shadow-lg h-64 w-[calc(90%-10px)] md:w-[calc(50%-50px)] lg:w-[calc(30%-60px)]">
                        <h1 class="text-xl font-bold mb-2">({{ $subdimensi->dimensi }})</h1>
                        <h2 class="text-lg mb-4">{{ $subdimensi->sub }}</h2>
                        <p class="text-sm mb-6">{!! $subdimensi->deskripsi !!}</p>
                        <div class="flex absolute bottom-5 right-5">
                            <div class="bg-white rounded-full p-3">
                                <img src="{{ asset('uploads/subdimensi/' . $subdimensi->gambar) }}"
                                    alt="{{ $subdimensi->dimensi }}" class="w-10">
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- Card lainnya -->
            </div>
            <!-- card end -->
        </div>
    </section>
    {{-- Sub Dimensi Section End --}}

    {{-- Masterplan Section Start --}}
    <section id="content4" class="pt-24 pb-24 content">
        <div class="w-full">
            <div class="px-4 lg:px-24 sm:mx-7">
                <h1 class="text-[48px] font-bold mb-7 text-primary block">MasterPlan dan Power Point Smart City</h1>
            </div>
            {{-- MASTERPLAN START --}}
            <div class="px-4 lg:px-24 mt-14 sm:mx-7">
                <div class="slide-up w-full bg-primary rounded-xl">
                    <h2 class="text-lg text-white font-semibold text-center px-3 py-3 sm:text-xl uppercase">MASTERPLAN
                        SMART CITY KOTA BOGOR
                    </h2>
                </div>
            </div>
            <div class="px-4 lg:px-24 grid grid-cols-1 gap-3 mt-5 sm:mx-7 md:grid-cols-2">
                @foreach ($masterplanFiles as $file)
                    <div
                        class="slide-up w-full grid bg-white rounded-xl shadow-lg border-l-8 border-primary overflow-hidden">
                        <div>
                            <h2 class="text-lg text-dark font-bold text-start px-4 pt-3 pb-1">{{ $file->judul }}</h2>

                            <div class="flex justify-between">
                                <!-- Tombol View -->
                                <button class="group mb-5 view-data" data-id="{{ $file->id }}"
                                    data-url="{{ $file->url }}">
                                    <span class="px-4 group-hover:text-primary group-hover:font-semibold">
                                        Lihat Selengkapnya
                                    </span>
                                </button>

                                <!-- Tempat menampilkan jumlah dilihat -->
                                <div class="px-4">
                                    <p id="data-views-{{ $file->id }}">Dilihat: {{ $file->dilihat }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>

            {{-- MASTERPLAN END --}}
            {{-- POWERPOINT START --}}
            <div class="px-4 lg:px-24 mt-14 sm:mx-7">
                <div class="slide-up w-full bg-primary rounded-xl">
                    <h2 class="text-lg text-white font-semibold text-center px-3 py-3 sm:text-xl uppercase">POWERPOINT
                    </h2>
                </div>
            </div>

            <div class="px-4 lg:px-24 grid grid-cols-1 gap-3 mt-5 sm:mx-7 md:grid-cols-2">
                @foreach ($powerpointFiles as $file)
                    <div
                        class="slide-up w-full grid bg-white rounded-xl shadow-lg border-l-8 border-primary overflow-hidden">
                        <div>
                            <h2 class="text-lg text-dark font-bold text-start px-4 pt-3 pb-1">{{ $file->judul }}</h2>

                            <div class="flex justify-between">
                                <!-- Tombol View -->
                                <button class="group mb-5 view-data" data-id="{{ $file->id }}"
                                    data-url="{{ $file->url }}">
                                    <span class="px-4 group-hover:text-primary group-hover:font-semibold">
                                        Lihat Selengkapnya
                                    </span>
                                </button>

                                <!-- Tempat menampilkan jumlah dilihat -->
                                <div class="px-4">
                                    <p id="data-views-{{ $file->id }}">Dilihat: {{ $file->dilihat }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
            {{-- POWERPOINT END --}}
        </div>
    </section>
    {{-- Masterplan Section End --}}

    {{-- Booklet Info Start --}}
    <section id="content5"
        class="relative min-h-screen flex flex-col justify-center overflow-hidden bg-gradient-to-b from-gradient/30 content">
        <div class="w-full max-w-7xl mx-auto px-4 md:px-6 py-24">
            <div class="px-4 sm:mx-7">
                <h1 class="text-[48px] text-center font-bold mb-7 text-primary block page-title">Booklet Info Smart
                    City</h1>
            </div>
            <!-- Card slider -->
            <div class="relative w-full max-w-7xl overflow-hidden">
                <div id="slider" class="flex transition-transform duration-500">
                    @foreach ($booklets as $card)
                        <div class="slide-up flex-shrink-0 w-full xs:w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2 group">
                            <div
                                class="bg-white rounded-tl-lg rounded-tr-3xl rounded-br-lg rounded-bl-3xl border border-gray-300 shadow-lg flex flex-col items-center w-full relative overflow-hidden">

                                <!-- Gambar dengan efek zoom dan overlay -->
                                <div class="relative overflow-hidden w-full h-[400px]">
                                    <img src="{{ asset('uploads/booklet/' . $card->gambar) }}"
                                        alt="{{ $card->judul }}"
                                        class="w-full h-full object-cover transition-transform duration-300 transform group-hover:scale-110">
                                    <div
                                        class="absolute inset-0 bg-black opacity-0 group-hover:opacity-30 transition-opacity duration-300">
                                    </div>
                                </div>

                                <!-- Judul dan tombol -->
                                <h1 class="text-lg text-primary font-bold pt-1 my-4">{{ $card->judul }}</h1>
                                <a href="{{ $card->url }}"
                                    class="bg-primary text-white px-4 py-2 rounded-lg transition duration-300 hover:bg-blue-800 absolute bottom-12"
                                    target="_blank">Selengkapnya</a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Tombol Navigasi -->
                <button id="prevButton"
                    class="absolute h-full rounded-s-xl p-4 left-0 top-1/2 transform -translate-y-1/2 bg-white/50 border border-gray-300 text-white ml-2 group group-hover:bg-white">
                    <span class="group-hover:text-primary">&#10094;</span>
                </button>
                <button id="nextButton"
                    class="absolute h-full rounded-e-xl p-4 right-0 top-1/2 transform -translate-y-1/2 bg-white/50 border border-gray-300 text-white mr-2 group">
                    <span class="group-hover:text-primary">&#10095;</span>
                </button>
            </div>

            <!-- End: Card slider -->
        </div>
    </section>
    {{-- Booklet Info End --}}

    {{-- Road Map Section Start --}}
    <section id="content6" class="pt-24 pb-32 content">
        <div class="w-full">
            <div class="px-4 lg:px-24 sm:mx-7">
                <h1 class="text-[48px] font-bold mb-7 text-primary block text-center page-title">Road Map</h1>
            </div>
            @foreach ($roadmaps as $rm)
                <div class="slide-up px-4 lg:px-24 sm:mx-7">
                    <div class="w-full p-5 shadow-lg border border-gray-300 rounded-xl">
                        <img src="{{ asset('uploads/roadmap/' . $rm->gambar) }}" alt="dokumen" class="w-full">
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    {{-- Road Map Section End --}}

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

    {{-- JS Start --}}

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

    {{-- scroll reveal start --}}
    <script src="/js/script.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    {{-- scroll reveal start --}}

    <script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script>

    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>

    <!-- Dokumen Counter Start -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Event click pada tombol view-data
            $('.view-data').click(function(event) {
                event.preventDefault(); // Mencegah halaman melakukan redirect secara langsung

                // Ambil ID dan URL dari tombol yang diklik
                let dataId = $(this).data('id');
                let targetUrl = $(this).data('url');

                // Panggil fungsi getDataById() menggunakan AJAX
                $.ajax({
                    url: `/data/${dataId}`, // Route ke fungsi getDataById di Controller
                    type: 'GET',
                    success: function(response) {
                        // Update tampilan jumlah "Dilihat" pada elemen yang sesuai
                        $(`#data-views-${dataId}`).text('Dilihat: ' + response.dilihat);

                        // Arahkan pengguna ke URL yang telah ditentukan di tab baru
                        window.open(targetUrl, '_blank');
                    },
                    error: function(error) {
                        console.log("Terjadi kesalahan:", error);
                    }
                });
            });
        });
    </script>
    <!-- Dokumen Counter End -->

    {{-- Card Slider Start --}}
    <script>
        const slider = document.getElementById('slider');
        const prevButton = document.getElementById('prevButton');
        const nextButton = document.getElementById('nextButton');
        const cardCount = slider.children.length;
        let currentIndex = 0;
        let autoSlideInterval;

        function updateSliderPosition() {
            const screenWidth = window.innerWidth;
            let cardsPerSlide;

            // Tentukan jumlah card yang tampil per slide berdasarkan ukuran layar
            if (screenWidth >= 1024) {
                cardsPerSlide = 3;
            } else if (screenWidth >= 768) {
                cardsPerSlide = 2;
            } else {
                cardsPerSlide = 1;
            }

            // Total slide yang tersedia, dengan mempertimbangkan jumlah card yang tampil per slide
            const maxIndex = Math.ceil(cardCount / cardsPerSlide) - 1;

            // Pastikan indeks tidak melebihi maxIndex untuk menghindari tampilan kosong
            currentIndex = Math.min(currentIndex, maxIndex);

            // Update posisi slider
            slider.style.transform = `translateX(-${currentIndex * (100 / cardsPerSlide)}%)`;

            // Matikan tombol navigasi jika berada di ujung
            prevButton.disabled = (currentIndex === 0);
            nextButton.disabled = (currentIndex === maxIndex);
        }

        // Fungsi untuk mulai auto-slide
        function startAutoSlide() {
            autoSlideInterval = setInterval(() => {
                const screenWidth = window.innerWidth;
                let cardsPerSlide = screenWidth >= 1024 ? 3 : screenWidth >= 768 ? 2 : 1;
                const maxIndex = Math.ceil(cardCount / cardsPerSlide) - 1;

                // Pindah slide jika belum mencapai akhir
                if (currentIndex < maxIndex) {
                    currentIndex++;
                } else {
                    currentIndex = 0; // Reset ke awal setelah mencapai akhir
                }

                updateSliderPosition();
            }, 3000);
        }

        // Fungsi untuk menghentikan auto-slide
        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        prevButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateSliderPosition();
            }
        });

        nextButton.addEventListener('click', () => {
            const screenWidth = window.innerWidth;
            let cardsPerSlide = screenWidth >= 1024 ? 3 : screenWidth >= 768 ? 2 : 1;
            const maxIndex = Math.ceil(cardCount / cardsPerSlide) - 1;

            // Pindah slide hanya jika belum mencapai akhir
            if (currentIndex < maxIndex) {
                currentIndex++;
                updateSliderPosition();
            }
        });

        // Update posisi slider saat ukuran layar berubah
        window.addEventListener('resize', updateSliderPosition);

        // Tambahkan fungsi auto-slide
        startAutoSlide();

        // Pause auto-slide saat hover dan lanjutkan saat hover hilang
        const cardContainers = document.querySelectorAll('.group');
        cardContainers.forEach(card => {
            card.addEventListener('mouseenter', stopAutoSlide);
            card.addEventListener('mouseleave', startAutoSlide);
        });
    </script>
    {{-- Card Slider End --}}

    {{-- Search bar Start --}}
    <script>
        $(document).ready(function() {
            $("#searchInput").on("keydown", function(event) {
                if (event.key === "Enter") { // Menggunakan 'Enter' agar lebih universal
                    event.preventDefault(); // Mencegah submit form default
                    const query = $(this).val().toLowerCase();
                    if (query) {
                        let found = false;

                        $(".content").each(function() {
                            if ($(this).text().toLowerCase().includes(query) && !found) {
                                $(window).scrollTop($(this).offset().top);
                                found = true;
                            }
                        });
                    }
                }
            });
        });
    </script>
    {{-- Search bar End --}}

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
            }
        }
    </script>
    {{-- Navbar Transparant to White End --}}

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
    {{-- Navbar Nav Link Color End --}}

    <script>
        const navLinks = document.querySelector('.nav-links')

        function onToggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>

    {{-- Isotope Data Filter Start --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- isotope plugin -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src="public/js/pagedone.js"></script>

    <script>
        // init Isotope
        var $grid = $('#product-list').isotope({
            // options
            layoutMode: 'fitRows'
        });
        // filter items on button click
        $('.filter-button-group').on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });
    </script>
    {{-- Isotope Data Filter End --}}


    {{-- JS End --}}
</body>

</html>
