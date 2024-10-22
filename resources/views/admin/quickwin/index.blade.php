<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 gap-3 justify-between">
                        <h1 class="text-lg">Quick Win</h1>
                        <a href="{{ route('admin.quickwin.create') }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambah
                            Quick
                            Win</a>
                        <table>
                            <thead>
                                <tr>
                                    <th>GAMBAR</th>
                                    <th>JUDUL</th>
                                    <th>DESKRIPSI</th>
                                    <th style="width: 20%">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($quickwins as $quickwin)
                                    <tr>
                                        <td class="justify-center">
                                            <img src="{{ asset('/storage/public/quickwins/' . $quickwin->gambar) }}"
                                                class="rounded" style="width: 150px">
                                        </td>
                                        <td class="justify-center">{{ $quickwin->judul }}</td>
                                        <td class="justify-center">{{ $quickwin->deskripsi }}</td>
                                    </tr>
                                @empty
                                    <div class="">
                                        Data Products belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
