@extends('general')

@section('isi')
    @foreach ($clickCount as $cc)
        <span class="px-4 group-hover:text-primary group-hover:font-semibold">
            <!-- Panggil fungsi JavaScript dengan ID file -->
            <a href="javascript:void(0);" onclick="trackClickAndRedirect({{ $file->id }})">Lihat Selengkapnya</a>
        </span>
        Pengunjung: {{ $cc->dilihat }}
    @endforeach
@endsection
