<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Models\Sertifikat;
use Illuminate\Http\Request;

class PenilaianPage extends Controller
{
    public function penilaian()
    {
        $penilaians = Penilaian::all();
        $sertifikats = Sertifikat::all();

        return view('penilaian', compact('penilaians', 'sertifikats'));
    }
}
