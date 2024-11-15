<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mt-24 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border border-gray-300 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 font-medium text-gray-900">
                    {{ __('Selamat Datang di Dashboard Smart City!') }}
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-2 px-8 gap-10">
        <div class="bg-white p-5 flex flex-wrap border border-gray-300 rounded-lg shadow-lg items-center">
            <div class="bg-green-500 p-5 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="size-6 text-white">
                    <path fill-rule="evenodd"
                        d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                        clip-rule="evenodd" />
                </svg>
            </div>

            <h1 class="text-slate-800 font-medium text-xl ms-5">Total Pengunjung Hari Ini: {{ $todayVisitors }}</h1>
        </div>

        <div class="bg-white p-5 flex flex-wrap border border-gray-300 rounded-lg shadow-lg items-center">
            <div class="bg-green-500 p-5 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="size-6 text-white">
                    <path fill-rule="evenodd"
                        d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z"
                        clip-rule="evenodd" />
                    <path
                        d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                </svg>

            </div>

            <h1 class="text-slate-800 font-medium text-xl ms-5">Total Pengunjung Keseluruhan: {{ $totalVisitors }}</h1>
        </div>


    </div>
</x-app-layout>
