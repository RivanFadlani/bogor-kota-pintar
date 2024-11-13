<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl my-24 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border border-gray-300 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 font-medium text-gray-900">
                    {{ __('Selamat Datang di Dashboard Smart City!') }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
