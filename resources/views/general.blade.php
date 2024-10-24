<!DOCTYPE html>
<html lang="en"> <!-- class="scroll-smooth" -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="/css/pagedone.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <title>Smart City Bogor</title>
</head>

<body>
    {{-- Header Section Start --}}
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

    {{-- Header Section End --}}

    {{-- Hero Section Start --}}
    <section id="home" class="overflow-hidden">
        <div class="container">
            <div class="w-screen h-[700px] bg-cover rounded-bl-[150px]"
                style="background-image: url(/img/bogor-wahyu-priyanto.jpg)">
                <div
                    class="w-full h-full bg-gradient-to-t from-primary rounded-bl-[150px] self-center p-10 px-4 relative">
                    <h1 class="text-5xl font-bold text-white text-center mt-40 sm:text-start sm:ps-10 lg:text-[80px]">
                        Smart City</h1>
                    <h2
                        class="text-3xl font-semibold text-white text-center mb-5 sm:text-start sm:ps-10 lg:text-[40px]">
                        Kota Bogor
                    </h2>
                    <p class="text-base font-semibold text-slate-300 text-center mb-5 px-10 sm:text-start sm:ps-10">
                        Lorem
                        ipsum
                        dolor sit amet,
                        consectetur adipisicing elit. Minima, corporis.</p>

                    <div class="flex justify-center sm:justify-start sm:ps-10">
                        <form class="relative">
                            <input type="text"
                                class="w-72 pl-10 pr-4 py-2 rounded-full shadow-sm border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
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
    <section id="dimensi" class="pt-36 pb-32">
        <div class="w-full">
            <div class="px-4 sm:mx-7">
                <h1 class="text-[48px] font-bold mb-5 block">Dimensi</h1>
            </div>
            <div class="flex flex-wrap gap-6 px-4 sm:mx-7">
                {{-- card 1 --}}
                <div
                    class="relative flex flex-col w-full items-center border border-solid shadow-xl border-gray-200 rounded-2xl transition-all duration-500 md:flex-row md:w-[48%] lg:w-[48%] overflow-hidden">
                    <div class="block w-full overflow-hidden md:w-32 md:h-full h-32 bg-primary">
                    </div>
                    <div class="p-4 w-full">
                        <h4 class="text-lg font-bold text-dark mb-2 capitalize transition-all duration-500">
                            Smart Governance</h4>
                        <p class="text-sm font-normal text-gray-800 transition-all duration-500 leading-5">Layanan
                            Publik, Transparansi, Keamanan,
                            Ketertiban Umum <span class="font-semibold">E-Menanduk, Mall Pelayanan Publik Graha
                                Tiyasa</span></p>
                    </div>
                </div>
                {{-- card 2 --}}
                <div
                    class="relative flex flex-col w-full items-center border border-solid shadow-xl border-gray-200 rounded-2xl transition-all duration-500 md:flex-row md:w-[48%] lg:w-[48%] overflow-hidden">
                    <div class="block w-full overflow-hidden md:w-32 md:h-full h-32 bg-primary">
                    </div>
                    <div class="p-4 w-full">
                        <h4 class="text-lg font-bold text-dark mb-2 capitalize transition-all duration-500">
                            Smart Branding</h4>
                        <p class="text-sm font-normal text-gray-800 transition-all duration-500 leading-5">Penataan
                            Wajah Kota dan Pemasaran Potensi
                            Daerah Secara Lokal, Nasional dan Global
                            <span class="font-semibold">100% Bogor Pisan, Bogor Berlari</span>
                        </p>
                    </div>
                </div>
                {{-- card 3 --}}
                <div
                    class="relative flex flex-col w-full items-center border border-solid shadow-xl border-gray-200 rounded-2xl transition-all duration-500 md:flex-row md:w-[48%] lg:w-[48%] overflow-hidden">
                    <div class="block w-full overflow-hidden md:w-32 md:h-full h-32 bg-primary">
                    </div>
                    <div class="p-4 w-full">
                        <h4 class="text-lg font-bold text-dark mb-2 capitalize transition-all duration-500">
                            Smart Economy</h4>
                        <p class="text-sm font-normal text-gray-800 transition-all duration-500 leading-5">Peluang
                            Usaha, Sumber Daya, Permodalan
                            <span class="font-semibold">Pengembangan (Sistem Layanan Perizinan)
                                SMART, Manajemen Inovasi Daerah (IGA)</span>
                        </p>
                    </div>
                </div>
                {{-- card 4 --}}
                <div
                    class="relative flex flex-col w-full items-center border border-solid shadow-xl border-gray-200 rounded-2xl transition-all duration-500 md:flex-row md:w-[48%] lg:w-[48%] overflow-hidden">
                    <div class="block w-full overflow-hidden md:w-32 md:h-full h-32 bg-primary">
                    </div>
                    <div class="p-4 w-full">
                        <h4 class="text-lg font-bold text-dark mb-2 capitalize transition-all duration-500">
                            Smart Living</h4>
                        <p class="text-sm font-normal text-gray-800 transition-all duration-500 leading-5">Tersedianya
                            Lingkungan Tempat Tinggal yang
                            Layak Tinggal, Nyaman, dan Efisien.
                            <span class="font-semibold">Simpus di 26 Puskesmas, e-SIR</span>
                        </p>
                    </div>
                </div>
                {{-- card 5 --}}
                <div
                    class="relative flex flex-col w-full items-center border border-solid shadow-xl border-gray-200 rounded-2xl transition-all duration-500 md:flex-row md:w-[48%] lg:w-[48%] overflow-hidden">
                    <div class="block w-full overflow-hidden md:w-32 md:h-full h-32 bg-primary">
                    </div>
                    <div class="p-4 w-full">
                        <h4 class="text-lg font-bold text-dark mb-2 capitalize transition-all duration-500">
                            Smart Society</h4>
                        <p class="text-sm font-normal text-gray-800 transition-all duration-500 leading-5">Ekosistem
                            Sosio-Teknis Masyarakat yang Humanis, Dinamis, Produktif, Komunikatif dan Interaktif
                            <span class="font-semibold">Inovasi Keselamatan Publik, Sibadra</span>
                        </p>
                    </div>
                </div>
                {{-- card 6 --}}
                <div
                    class="relative flex flex-col w-full items-center border border-solid shadow-xl border-gray-200 rounded-2xl transition-all duration-500 md:flex-row md:w-[48%] lg:w-[48%] overflow-hidden">
                    <div class="block w-full overflow-hidden md:w-32 md:h-full h-32 bg-primary">
                    </div>
                    <div class="p-4 w-full">
                        <h4 class="text-lg font-bold text-dark mb-2 capitalize transition-all duration-500">
                            Smart Branding</h4>
                        <p class="text-sm font-normal text-gray-800 transition-all duration-500 leading-5">Penataan
                            Wajah Kota dan Pemasaran Potensi
                            Daerah Secara Lokal, Nasional dan Global
                            <span class="font-semibold">100% Bogor Pisan, Bogor Berlari</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Dimensi Section End --}}

    {{-- Visi dan Misi Section Start --}}
    <section id="visimisi" class="pt-24 bg-gradient-to-t from-gradient/30 lg:px-8">
        <div class="w-full h-full">
            <div class="px-4 sm:mx-7 text-center">
                <h1 class="text-[48px] font-bold mb-7 block">Visi dan Misi</h1>
            </div>

            <!-- Flex container untuk gambar di kanan dan card Visi di kiri -->
            <div class="flex flex-col md:flex-row md:items-center px-4 sm:mx-7 lg:mx-auto">
                <!-- Card Visi (lebar full) -->
                <div
                    class="flex-grow w-full py-16 px-10 sm:py-16 sm:px-10 mt-4 flex bg-white rounded-3xl justify-start items-center shadow-[inset_0_4px_10px_rgba(0,0,0,0.4)] md:mt-0 md:mb-0 md:mr-16">
                    <div class="w-full flex">
                        <h2 class="text-5xl font-bold mb-3">Visi</h2> <!-- Margin bawah dikurangi -->
                        <div class="px-6 ms-6 lg:pe-80 border-l-4 text-xl">
                            Terwujudnya Kota Bogor Sebagai Kota Ramah Keluarga
                        </div>
                    </div>
                </div>

                <!-- Gambar di sebelah kanan card Visi -->
                <img src="/img/Visi.png" alt="visimisi"
                    class="h-full mb-4 hidden pt-7 md:block sm:w-96 mx-auto md:mx-0">
                <!-- Gambar tetap disebelah kanan -->
            </div>

            <!-- Flex container untuk gambar di kiri dan card Misi di kanan serta video -->
            <div class="flex flex-col md:flex-col md:items-start px-4 sm:mx-7 lg:mx-auto">
                <div class="flex flex-col md:flex-row w-full">
                    <!-- Gambar di sebelah kiri card Misi -->
                    <img src="/img/Visi.png" alt="visimisi"
                        class="h-full mb-4 hidden md:block sm:w-96 md:mr-8 lg:mr-16 mx-auto md:mx-0">
                    <!-- Gambar tetap disebelah kiri -->

                    <!-- Card Misi (height menyesuaikan isi) -->
                    <div
                        class="flex-grow h-min w-full mt-5 py-16 px-10 sm:py-16 sm:px-10 mb-4 flex bg-white rounded-3xl justify-end items-start shadow-[inset_0_4px_10px_rgba(0,0,0,0.4)] md:mb-0">
                        <div class="w-full flex">
                            <h2 class="text-5xl pt-2 font-bold mb-3">Misi</h2> <!-- Margin bawah dikurangi -->
                            <ol class="list-disc ms-6 pl-9 border-l-4 text-xl">
                                <li>Mewujudkan Kota yang Sehat</li>
                                <li>Mewujudkan Kota yang Cerdas</li>
                                <li>Mewujudkan Kota yang Sejahtera</li>
                            </ol>
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
                <video class="w-full rounded-lg mt-10" autoplay controls>
                    <source src="" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>
    {{-- Visi dan Misi Section End --}}

    {{-- Peserta IGA Section Start --}}
    <section id="pesertaiga" class="pt-24 pb-32 bg-gradient-to-t from-gradient/30">
        <div class="w-full">
            <div class="px-4 sm:mx-7">
                <h1 class="text-[48px] font-bold mb-7 block">Peserta IGA 2020</h1>
            </div>
            <!-- button start -->
            <div class="filter-button-group px-4 sm:mx-7 mb-5 flex flex-wrap gap-3">
                <button data-filter="*"
                    class="bg-transparent group hover:bg-primary text-primary font-semibold py-2 px-4 border border-primary rounded-lg shadow">
                    <span class="active group-hover:text-white">Semua</span>
                </button>
                <button data-filter=".dpmptsp"
                    class="bg-transparent group hover:bg-primary text-primary font-semibold py-2 px-4 border border-primary rounded-lg shadow">
                    <span class="group-hover:text-white">DPMPTSP</span>
                </button>
                <button data-filter=".bpksdm"
                    class="bg-transparent group hover:bg-primary text-primary font-semibold py-2 px-4 border border-primary rounded-lg shadow">
                    <span class="group-hover:text-white">BPKSDM</span>
                </button>
                <button data-filter=".dishub"
                    class="bg-transparent group hover:bg-primary text-primary font-semibold py-2 px-4 border border-primary rounded-lg shadow">
                    <span class="group-hover:text-white">DISHUB</span>
                </button>
                <button data-filter=".kesra"
                    class="bg-transparent group hover:bg-primary text-primary font-semibold py-2 px-4 border border-primary rounded-lg shadow">
                    <span class="group-hover:text-white">KESRA</span>
                </button>
                <button data-filter=".dinkes"
                    class="bg-transparent group hover:bg-primary text-primary font-semibold py-2 px-4 border border-primary rounded-lg shadow">
                    <span class="group-hover:text-white">DINKES</span>
                </button>
                <button data-filter=".bapenda"
                    class="bg-transparent group hover:bg-primary text-primary font-semibold py-2 px-4 border border-primary rounded-lg shadow">
                    <span class="group-hover:text-white">BAPENDA</span>
                </button>
                <button data-filter=".disdukcapil"
                    class="bg-transparent group hover:bg-primary text-primary font-semibold py-2 px-4 border border-primary rounded-lg shadow">
                    <span class="group-hover:text-white">DISDUKCAPIL</span>
                </button>
                <button data-filter=".dinsos"
                    class="bg-transparent group hover:bg-primary text-primary font-semibold py-2 px-4 border border-primary rounded-lg shadow">
                    <span class="group-hover:text-white">DINSOS</span>
                </button>
            </div>
            <!-- button end -->

            <!-- card start -->
            <div id="product-list" class="w-full px-2 sm:px-8 flex flex-wrap">
                <div
                    class="dpmptsp bg-primary text-white m-2 p-6 rounded-lg shadow-lg w-[450px] sm:w-[540px] md:w-[620px] lg:w-[calc(30%-12px)]">
                    <h1 class="text-xl font-bold mb-2">(DPMPTSP)</h1>
                    <h2 class="text-lg mb-4">Tanda Tangan Elektronik</h2>
                    <p class="text-sm mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis rem reiciendis beatae quam,
                        earum porro quod iure praesentium laboriosam ipsa quae maiores voluptatibus! Corporis.
                    </p>
                    <div class="flex justify-end">
                        <div class="bg-white rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0-5a9 9 0 1 0 0 18a9 9 0 0 0 0-18z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Card lainnya -->
                <div
                    class="dpmptsp bg-primary text-white m-2 p-6 rounded-lg shadow-lg w-[450px] sm:w-[540px] md:w-[620px] lg:w-[calc(30%-12px)]">
                    <h1 class="text-xl font-bold mb-2">(DPMPTSP)</h1>
                    <h2 class="text-lg mb-4">Tanda Tangan Elektronik</h2>
                    <p class="text-sm mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis rem reiciendis beatae quam,
                        earum porro quod iure praesentium laboriosam ipsa quae maiores voluptatibus! Corporis.
                    </p>
                    <div class="flex justify-end">
                        <div class="bg-white rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0-5a9 9 0 1 0 0 18a9 9 0 0 0 0-18z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Card lainnya -->
                <div
                    class="bpksdm bg-primary text-white m-2 p-6 rounded-lg shadow-lg w-[450px] sm:w-[540px] md:w-[620px] lg:w-[calc(30%-12px)]">
                    <h1 class="text-xl font-bold mb-2">(BPKSDM)</h1>
                    <h2 class="text-lg mb-4">Tanda Tangan Elektronik</h2>
                    <p class="text-sm mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis rem reiciendis beatae quam,
                        earum porro quod iure praesentium laboriosam ipsa quae maiores voluptatibus! Corporis.
                    </p>
                    <div class="flex justify-end">
                        <div class="bg-white rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0-5a9 9 0 1 0 0 18a9 9 0 0 0 0-18z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Card lainnya -->
                <div
                    class="dishub bg-primary text-white m-2 p-6 rounded-lg shadow-lg w-[450px] sm:w-[540px] md:w-[620px] lg:w-[calc(30%-12px)]">
                    <h1 class="text-xl font-bold mb-2">(DISHUB)</h1>
                    <h2 class="text-lg mb-4">Tanda Tangan Elektronik</h2>
                    <p class="text-sm mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis rem reiciendis beatae quam,
                        earum porro quod iure praesentium laboriosam ipsa quae maiores voluptatibus! Corporis.
                    </p>
                    <div class="flex justify-end">
                        <div class="bg-white rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0-5a9 9 0 1 0 0 18a9 9 0 0 0 0-18z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Card lainnya -->
                <div
                    class="kesra bg-primary text-white m-2 p-6 rounded-lg shadow-lg w-[450px] sm:w-[540px] md:w-[620px] lg:w-[calc(30%-12px)]">
                    <h1 class="text-xl font-bold mb-2">(KESRA)</h1>
                    <h2 class="text-lg mb-4">Tanda Tangan Elektronik</h2>
                    <p class="text-sm mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis rem reiciendis beatae quam,
                        earum porro quod iure praesentium laboriosam ipsa quae maiores voluptatibus! Corporis.
                    </p>
                    <div class="flex justify-end">
                        <div class="bg-white rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0-5a9 9 0 1 0 0 18a9 9 0 0 0 0-18z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Card lainnya -->
                <div
                    class="dinkes bg-primary text-white m-2 p-6 rounded-lg shadow-lg w-[450px] sm:w-[540px] md:w-[620px] lg:w-[calc(30%-12px)]">
                    <h1 class="text-xl font-bold mb-2">(DINKES)</h1>
                    <h2 class="text-lg mb-4">Tanda Tangan Elektronik</h2>
                    <p class="text-sm mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis rem reiciendis beatae quam,
                        earum porro quod iure praesentium laboriosam ipsa quae maiores voluptatibus! Corporis.
                    </p>
                    <div class="flex justify-end">
                        <div class="bg-white rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0-5a9 9 0 1 0 0 18a9 9 0 0 0 0-18z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Card lainnya -->
                <div
                    class="bapenda bg-primary text-white m-2 p-6 rounded-lg shadow-lg w-[450px] sm:w-[540px] md:w-[620px] lg:w-[calc(30%-12px)]">
                    <h1 class="text-xl font-bold mb-2">(BAPENDA)</h1>
                    <h2 class="text-lg mb-4">Tanda Tangan Elektronik</h2>
                    <p class="text-sm mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis rem reiciendis beatae quam,
                        earum porro quod iure praesentium laboriosam ipsa quae maiores voluptatibus! Corporis.
                    </p>
                    <div class="flex justify-end">
                        <div class="bg-white rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0-5a9 9 0 1 0 0 18a9 9 0 0 0 0-18z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Card lainnya -->
                <div
                    class="disdukcapil bg-primary text-white m-2 p-6 rounded-lg shadow-lg w-[450px] sm:w-[540px] md:w-[620px] lg:w-[calc(30%-12px)]">
                    <h1 class="text-xl font-bold mb-2">(DISDUKCAPIL)</h1>
                    <h2 class="text-lg mb-4">Tanda Tangan Elektronik</h2>
                    <p class="text-sm mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis rem reiciendis beatae quam,
                        earum porro quod iure praesentium laboriosam ipsa quae maiores voluptatibus! Corporis.
                    </p>
                    <div class="flex justify-end">
                        <div class="bg-white rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0-5a9 9 0 1 0 0 18a9 9 0 0 0 0-18z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Card lainnya -->
                <div
                    class="dinsos bg-primary text-white m-2 p-6 rounded-lg shadow-lg w-[450px] sm:w-[540px] md:w-[620px] lg:w-[calc(30%-12px)]">
                    <h1 class="text-xl font-bold mb-2">(DINSOS)</h1>
                    <h2 class="text-lg mb-4">Tanda Tangan Elektronik</h2>
                    <p class="text-sm mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis rem reiciendis beatae quam,
                        earum porro quod iure praesentium laboriosam ipsa quae maiores voluptatibus! Corporis.
                    </p>
                    <div class="flex justify-end">
                        <div class="bg-white rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0-5a9 9 0 1 0 0 18a9 9 0 0 0 0-18z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div
                    class="dpmptsp bg-primary/0 text-white m-2 p-6 w-[465px] sm:w-[540px] md:w-[620px] lg:w-[calc(30%-12px)]">
                </div>
                <!-- Card lainnya -->
            </div>
            <!-- card end -->
        </div>
    </section>

    {{-- Peserta IGA Section End --}}

    {{-- Program Implentasi Section Start --}}
    <section id="quickwins" class="pt-28 pb-28 bg-gradient-to-b from-gradient/30">
        <div class="w-full">
            <div class="px-4 sm:mx-7">
                <h1 class="text-[48px] font-bold mb-7 block">Program Implementasi Smart City</h1>
            </div>
        </div>
    </section>

    {{-- Program Implentasi Section End --}}

    {{-- Masterplan Section Start --}}
    <section id="masterplan" class="pt-24 pb-24">
        <div class="w-full">
            <div class="px-4 sm:mx-7">
                <h1 class="text-[48px] font-bold mb-7 block">MasterPlan dan Power Point Smart City</h1>
            </div>
            {{-- MASTERPLAN 2017 - 2021 START --}}
            <div class="px-4 mt-14 sm:mx-7">
                <div class="w-full bg-primary rounded-xl">
                    <h2 class="text-lg text-white font-semibold text-center px-3 py-3 sm:text-xl uppercase">MASTERPLAN
                        SMART CITY KOTA BOGOR
                    </h2>
                </div>
            </div>
            <div class="px-4 grid grid-cols-1 gap-3 mt-5 sm:mx-7 md:grid-cols-2">
                @foreach ($masterplanFiles as $file)
                    <div class="w-full grid bg-white rounded-xl shadow-lg border-l-8 border-primary overflow-hidden">
                        <div>
                            <h2 class="text-lg text-dark font-bold text-start px-4 pt-3 pb-1">{{ $file->judul }}
                            </h2>
                            <button class="group mb-5"><span
                                    class="px-4 group-hover:text-primary group-hover:font-semibold"><a
                                        href="{{ $file->url }}">Lihat Selengkapnya</a>
                                    ></span></button>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- MASTERPLAN 2017 - 2021 END --}}
            {{-- MASTERPLAN 2023 - 2027 START --}}
            {{-- <div class="px-4 mt-14 sm:mx-7">
                <div class="w-full bg-primary rounded-xl">
                    <h2 class="text-lg text-white font-semibold text-center px-3 py-3 sm:text-xl uppercase">MASTERPLAN
                        SMART CITY KOTA BOGOR 2023 - 2027
                    </h2>
                </div>
            </div>
            <div class="px-4 grid grid-cols-1 gap-3 mt-5 sm:mx-7 md:grid-cols-2">
                <div class="w-full grid bg-white rounded-xl shadow-lg border-l-8 border-primary overflow-hidden">
                    <div>
                        <h2 class="text-lg text-dark font-bold text-start px-4 pt-3 pb-1">Capaian Program Smart City
                            Kota Bogor VI 2018</h2>
                        <button class="group mb-5"><span
                                class="px-4 group-hover:text-primary group-hover:font-semibold">Lihat Selengkapnya
                                ></span></button>
                    </div>
                </div>
                <div class="w-full grid bg-white rounded-xl shadow-lg border-l-8 border-primary overflow-hidden">
                    <div>
                        <h2 class="text-lg text-dark font-bold text-start px-4 pt-3 pb-1">Pointer Evaluasi Gerakan
                            Menuju 100 Smart City Indonesia Tahun 2021</h2>
                        <button class="group mb-5"><span
                                class="px-4 group-hover:text-primary group-hover:font-semibold">Lihat Selengkapnya
                                ></span></button>
                    </div>
                </div>
                <div class="w-full grid bg-white rounded-xl shadow-lg border-l-8 border-primary overflow-hidden">
                    <div>
                        <h2 class="text-lg text-dark font-bold text-start px-4 pt-3 pb-1">Buku 1 (satu). Analisis
                            Strategis
                            Smart City Kota Bogor</h2>
                        <button class="group mb-5"><span
                                class="px-4 group-hover:text-primary group-hover:font-semibold">Lihat Lebih Lanjut
                                ></span></button>
                    </div>
                </div>
            </div> --}}
            {{-- MASTERPLAN 2023 - 2027 END --}}
            {{-- POWERPOINT START --}}
            <div class="px-4 mt-14 sm:mx-7">
                <div class="w-full bg-primary rounded-xl">
                    <h2 class="text-lg text-white font-semibold text-center px-3 py-3 sm:text-xl uppercase">POWERPOINT
                    </h2>
                </div>
            </div>

            <div class="px-4 grid grid-cols-1 gap-3 mt-5 sm:mx-7 md:grid-cols-2">
                @foreach ($powerpointFiles as $file)
                    <div class="w-full grid bg-white rounded-xl shadow-lg border-l-8 border-primary overflow-hidden">
                        <div>
                            <h2 class="text-lg text-dark font-bold text-start px-4 pt-3 pb-1">{{ $file->judul }}</h2>
                            <button class="group mb-5"><span
                                    class="px-4 group-hover:text-primary group-hover:font-semibold"><a
                                        href="{{ $file->url }}">Lihat Selengkapnya</a>
                                    ></span></button>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- POWERPOINT END --}}
        </div>
    </section>
    {{-- Masterplan Section End --}}

    {{-- Booklet Info Start --}}
    <section id="booklet" class="pt-24 pb-32">
        <div class="w-full">
            <div class="px-4 sm:mx-7">
                <h1 class="text-[48px] font-bold mb-7 block">Booklet Info Smart City</h1>
            </div>
        </div>
    </section>
    {{-- Booklet Info End --}}

    {{-- Road Map Section Start --}}
    <section id="roadmap" class="pt-24 pb-32">
        <div class="w-full">
            <div class="px-4 sm:mx-7">
                <h1 class="text-[48px] font-bold mb-7 block">Road Map Jangka Menengah E-Gov dan Smart City</h1>
            </div>
            <div class="px-4 sm:mx-7"></div>
        </div>
    </section>
    {{-- Road Map Section End --}}

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
                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M12.037 21.998a10.313 10.313 0 0 1-7.168-3.049 9.888 9.888 0 0 1-2.868-7.118 9.947 9.947 0 0 1 3.064-6.949A10.37 10.37 0 0 1 12.212 2h.176a9.935 9.935 0 0 1 6.614 2.564L16.457 6.88a6.187 6.187 0 0 0-4.131-1.566 6.9 6.9 0 0 0-4.794 1.913 6.618 6.618 0 0 0-2.045 4.657 6.608 6.608 0 0 0 1.882 4.723 6.891 6.891 0 0 0 4.725 2.07h.143c1.41.072 2.8-.354 3.917-1.2a5.77 5.77 0 0 0 2.172-3.41l.043-.117H12.22v-3.41h9.678c.075.617.109 1.238.1 1.859-.099 5.741-4.017 9.6-9.746 9.6l-.215-.002Z"
                        clip-rule="evenodd" />
                </svg>

                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                        clip-rule="evenodd" />
                </svg>

                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z" />
                </svg>


                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd"
                        d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                        clip-rule="evenodd" />
                </svg>
            </div>

            <div class="px-4 sm:mx-7 flex flex-col gap-x-3 mt-5 text-center">
                <h2 class="text-white font-semibold text-2xl">Statistik Pengunjung</h2>
                <div class="flex flex-wrap gap-x-3 text-center justify-center">
                    <h3 class="text-indigo-400 text-lg">Hari Ini: 25</h3>
                    <h3 class="text-indigo-400 text-lg">Total Pengunjung: 61533</h3>
                </div>
            </div>

            <div class="px-4 sm:mx-7 mt-10 text-center">
                <h3 class="text-white text-lg">Copyright © 2024 Dinas Komunikasi dan Informatika Kota Bogor. All Right
                    Reserved</h3>
            </div>
        </div>
    </section>
    {{-- Footer End --}}

    {{-- JS Start --}}

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
        });
    </script>

    <script>
        const navLinks = document.querySelector('.nav-links')

        function onToggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>

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


    {{-- JS End --}}
</body>

</html>
