<?php

namespace App\Http\Controllers;

use App\Models\Booklet;
use App\Models\Dimensi;
use App\Models\Dokumen;
use App\Models\Kategori;
use App\Models\Navigasi;
use App\Models\Programimp;
use App\Models\Roadmap;
use App\Models\Subdimensi;
use App\Models\Video;
use App\Models\Visidanmisi;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function general()
    {
        $dokumen = Dokumen::all();
        $visimisi = Visidanmisi::all();
        $dimensis = Dimensi::all();
        $subdimensis = Subdimensi::all();
        $videos = Video::where('status', 'publish')->get();
        $roadmaps = Roadmap::where('status', 'publish')->get();
        $booklets = Booklet::where('status', 'publish')->get();
        $navigasis = Navigasi::all();

        $dimensiList = Subdimensi::distinct('dimensi')->pluck('dimensi');

        // Ambil ID dari kategori masterplan dan powerpoint
        $masterplanCategory = Kategori::where('kategori', 'masterplan')->first();
        $powerpointCategory = Kategori::where('kategori', 'powerpoint')->first();

        // Mengambil dokumen berdasarkan kategori
        $masterplanFiles = Dokumen::where('kategori_id', $masterplanCategory->id)->where('status', 'publish')->get();
        $powerpointFiles = Dokumen::where('kategori_id', $powerpointCategory->id)->where('status', 'publish')->get();

        // Kirim data ke view
        return view('general', compact('dokumen', 'visimisi', 'dimensis', 'subdimensis', 'dimensiList', 'videos', 'roadmaps', 'booklets', 'navigasis', 'masterplanFiles', 'powerpointFiles'));
    }
}
