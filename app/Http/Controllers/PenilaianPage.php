<?php

namespace App\Http\Controllers;

use App\Models\Navigasi;
use App\Models\Penilaian;
use App\Models\Sertifikat;
use Illuminate\Http\Request;

class PenilaianPage extends Controller
{
    public function penilaian()
    {
        $penilaians = Penilaian::all();
        $sertifikats = Sertifikat::all();
        $navigasis = Navigasi::all();

        return view('penilaian', compact('penilaians', 'sertifikats', 'navigasis'));
    }
}
